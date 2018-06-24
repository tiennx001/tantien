<?php

namespace AppBundle\Entity;

/**
 * ProductCategory
 */
class ProductCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $category_id;

    /**
     * @var integer
     */
    private $product_id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return ProductCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return ProductCategory
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }
    /**
     * @var \AppBundle\Entity\Product
     */
    private $product;


    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return ProductCategory
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
