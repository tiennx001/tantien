<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use FrontBundle\Twig\TwigExtension;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CRUDController extends Controller
{
    const SERVER_PATH_TO_DETAIL_IMAGE_FOLDER = '/uploads/product/detail_images';

    public function uploadMultipleFileAction()
    {
        $request = $this->getRequest();

        $response = array('files' => '');
        if ($request->isMethod('POST')) {
            $id = $request->get('id');
            $redis = $this->container->get('snc_redis.default');
            $imageHoldingKey = 'image-holding:' . $id;
            while (true) {
                if ($redis->incr($imageHoldingKey) === 1) {
                    $em = $this->getDoctrine()->getManager();
                    $productRepo = $em->getRepository(Product::class);
                    $product = $productRepo->findOneById($id);
                    if ($product) {
                        $file = $request->files->get('files')[0];

                        $ext = $file->getClientOriginalExtension();
                        if (!in_array($ext, array('jpg', 'jpeg', 'png'))) {
                            $redis->setex($imageHoldingKey, 30, 0);
                            $response = array('files' => array(array(
                                'name' => 'Định dạng file không hợp lệ'
                            )));
                            return $this->renderJson($response);
                        }

                        if (!in_array($file->getClientMimeType(), array('image/jpeg', 'image/png'))) {
                            $redis->setex($imageHoldingKey, 30, 0);
                            $response = array('files' => array(array(
                                'name' => 'Định dạng file không hợp lệ'
                            )));
                            return $this->renderJson($response);
                        }

                        $maxSize = 10 * 1024 * 1024;
                        if ($file->getClientSize() > $maxSize) {
                            $redis->setex($imageHoldingKey, 30, 0);
                            $response = array('files' => array(array(
                                'name' => 'Dung lượng file quá lớn'
                            )));
                            return $this->renderJson($response);
                        }

                        $helper = $this->get('service.helper');
                        $webDir = $this->getParameter('kernel.root_dir') . '/../web';
                        $path = $helper->generatePath($webDir, self::SERVER_PATH_TO_DETAIL_IMAGE_FOLDER);
                        $filename = md5($file->getClientOriginalName()) . '.' . $ext;
                        $fullPath = $webDir . $path;
                        $file->move($fullPath, $filename);

                        $colorValue = strval($request->get('file-color'));
                        $isDelete = $request->get('delete-file');
                        $imageDeletedKey = 'image-deleted:' . $id;

                        $deviceColor = null;
                        $imageArr = array();
                        foreach ($product->getProductColors() as $productColor) {
                            if ($productColor->getColor()->getId() == $colorValue) {
                                $deviceColor = $productColor;
                                $imageArr = json_decode($deviceColor->getImages(), true);
                                break;
                            }
                        }

                        if (!$deviceColor) {
                            $response = array('files' => array(array(
                                'name' => 'Không hợp lệ'
                            )));
                            return $this->renderJson($response);
                        }

                        if (!$isDelete || $redis->get($imageDeletedKey)) {
                            if (count($imageArr) >= 10) {
                                $response = array('files' => array(array(
                                    'name' => 'Tối đa 10 file mô tả'
                                )));
                                return $this->renderJson($response);
                            }

                            if (count($imageArr)) {
                                $mergedArr = array_merge($imageArr, array($path . '/' . $filename));
                                $deviceColor->setImages(json_encode($mergedArr));
                                $em->flush();
                            } else {
                                $deviceColor->setImages(json_encode(array($path . '/' . $filename)));
                                $em->flush();
                            }
                        } else {
                            foreach ($product->getProductColors() as $productColor) {
                                if ($productColor->getColor()->getId() == $colorValue) {
                                    $productColor->setImages(json_encode(array($path . '/' . $filename)));
                                    $em->flush();
                                } else {
                                    $productColor->setImages(null);
                                    $em->flush();
                                }
                            }
                            $redis->setex($imageDeletedKey, 30, 1);
                        }

                        $twigExt = new TwigExtension();
                        $response = array('files' => array(array('name' => $filename,
                            'thumbnailUrl' => $twigExt->getImageFilter($path . '/' . $filename, $webDir),
                            'url' => $twigExt->getImageFilter($path . '/' . $filename, $webDir)
                        )));
                    }
                    break;
                } else if ($redis->get($imageHoldingKey) > 100) {
                    $redis->setex($imageHoldingKey, 30, 0);
                }
            }
            $redis->setex($imageHoldingKey, 30, 0);
        }
        return $this->renderJson($response);
    }

    public function deleteUploadedFileAction()
    {
        $request = $this->getRequest();

        $response = array(
            'errorCode' => -1,
            'message' => 'Thất bại'
        );

        if ($request->isMethod('POST')) {
            $helper = $this->get('service.helper');
            $csrfToken = $request->get('_csrf_token');
            if ($helper->getCSRFToken() != $csrfToken) {
                $response = array(
                    'errorCode' => -1,
                    'message' => 'Lỗi CSRF'
                );
                return $this->renderJson($response);
            }

            $id = $request->get('id');
            $index = $request->get('index');
            $image = $request->get('image');
            $em = $this->getDoctrine()->getManager();
            $productRepo = $em->getRepository(Product::class);
            $product = $productRepo->find($id);
            if ($product) {
                $productColors = $product->getProductColors();
                foreach ($productColors as $pColor) {
                    if ($pColor->getColorId() == $index) {
                        $imageArr = json_decode($pColor->getImages(), true);
                        foreach ($imageArr as $i => $img) {
                            // Neu gap file xoa
                            if ($img == $image) {
                                // Loai file ra khoi array
                                unset($imageArr[$i]);
                                // Luu vao DB
                                $pColor->setImages(json_encode($imageArr));
                                $em->flush();
                                break;
                            }
                        }
                        break;
                    }
                }
                // Xoa thanh cong
                $response = array(
                    'errorCode' => 0,
                    'message' => 'Xóa thành công'
                );
            }
        }
        return $this->renderJson($response);
    }
}