<?php
/**
 * Created by PhpStorm.
 * User: DELL-VOSTRO
 * Date: 2017-04-11
 * Time: 8:09 PM
 */

namespace AppBundle\Service;

use AppBundle\Entity\Product;

class HelperService
{

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public function getProductPrice(Product $product)
    {
        if (count($product->getProductColors())) {
            foreach ($product->getProductColors() as $color) {
                return number_format($color->getPrice(), 0, ',', '.') . 'đ';
            }
        }
        return '';
    }

    /**
     * Ham tra ve duong dan theo ngay thang nam hoac theo duong dan truyen vao
     * @param string $webDir
     * @param string $path
     * @param boolean $byDate
     * @return string
     */
    public function generatePath($webDir, $path = '', $byDate = true)
    {
        if ($byDate) {
            if ($path)
                $folder = $path . '/' . date('Y') . '/' . date('m') . '/' . date('d');
            else
                $folder = date('Y') . '/' . date('m') . '/' . date('d');
        } else {
            $folder = $path;
        }
        $fullDir = $webDir . '/' . $folder;
        if (!is_dir($fullDir)) {
            @mkdir($fullDir, 0777, true);
        }
        return $folder;
    }


    private $CSRFSecret = 'SecretToken';
    private $CSRFFormName = 'BaseForm';

    /**
     * Returns a CSRF token, given a secret.
     *
     * If you want to change the algorithm used to compute the token, you
     * can override this method.
     *
     * @param  string $secret The secret string to use (null to use the current secret)
     * @param string $formName
     *
     * @return string A token string
     */
    public function getCSRFToken($secret = null, $formName = null)
    {
        if (null === $secret)
        {
            $secret = $this->CSRFSecret;
        }

        if (null === $formName) {
            $formName = $this->CSRFFormName;
        }

        return md5($secret.session_id().$formName);
    }

}