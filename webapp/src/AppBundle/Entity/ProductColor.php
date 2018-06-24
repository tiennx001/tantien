<?php

namespace AppBundle\Entity;

/**
 * ProductColor
 */
class ProductColor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $product_id;

    /**
     * @var integer
     */
    private $color_id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var string
     */
    private $images;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set productId
     *
     * @param integer $productId
     *
     * @return ProductColor
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
     * Set colorId
     *
     * @param integer $colorId
     *
     * @return ProductColor
     */
    public function setColorId($colorId)
    {
        $this->color_id = $colorId;

        return $this;
    }

    /**
     * Get colorId
     *
     * @return integer
     */
    public function getColorId()
    {
        return $this->color_id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return ProductColor
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ProductColor
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return ProductColor
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ProductColor
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var integer
     */
    private $price;


    /**
     * Set price
     *
     * @param integer $price
     *
     * @return ProductColor
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
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
     * @return ProductColor
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
    /**
     * @var \AppBundle\Entity\Color
     */
    private $color;


    /**
     * Set $color
     *
     * @param \AppBundle\Entity\Color $color
     *
     * @return ProductColor
     */
    public function setColor(\AppBundle\Entity\Color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get $color
     *
     * @return \AppBundle\Entity\Color
     */
    public function getColor()
    {
        return $this->color;
    }
}
