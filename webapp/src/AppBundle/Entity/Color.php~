<?php

namespace AppBundle\Entity;

/**
 * Color
 */
class Color
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $hex_code;

    /**
     * @var string
     */
    private $icon_path;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Color
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set hexCode
     *
     * @param string $hexCode
     *
     * @return Color
     */
    public function setHexCode($hexCode)
    {
        $this->hex_code = $hexCode;

        return $this;
    }

    /**
     * Get hexCode
     *
     * @return string
     */
    public function getHexCode()
    {
        return $this->hex_code;
    }

    /**
     * Set iconPath
     *
     * @param string $iconPath
     *
     * @return Color
     */
    public function setIconPath($iconPath)
    {
        $this->icon_path = $iconPath;

        return $this;
    }

    /**
     * Get iconPath
     *
     * @return string
     */
    public function getIconPath()
    {
        return $this->icon_path;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Color
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
     * Add product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Color
     */
    public function addProduct(\AppBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \AppBundle\Entity\Product $product
     */
    public function removeProduct(\AppBundle\Entity\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productColors;


    /**
     * Add productColor
     *
     * @param \AppBundle\Entity\ProductColor $productColor
     *
     * @return Color
     */
    public function addProductColor(\AppBundle\Entity\ProductColor $productColor)
    {
        $this->productColors[] = $productColor;

        return $this;
    }

    /**
     * Remove productColor
     *
     * @param \AppBundle\Entity\ProductColor $productColor
     */
    public function removeProductColor(\AppBundle\Entity\ProductColor $productColor)
    {
        $this->productColors->removeElement($productColor);
    }

    /**
     * Get productColors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductColors()
    {
        return $this->productColors;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pColors;


    /**
     * Add pColor
     *
     * @param \AppBundle\Entity\ProductColor $pColor
     *
     * @return Color
     */
    public function addPColor(\AppBundle\Entity\ProductColor $pColor)
    {
        $this->pColors[] = $pColor;

        return $this;
    }

    /**
     * Remove pColor
     *
     * @param \AppBundle\Entity\ProductColor $pColor
     */
    public function removePColor(\AppBundle\Entity\ProductColor $pColor)
    {
        $this->pColors->removeElement($pColor);
    }

    /**
     * Get pColors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPColors()
    {
        return $this->pColors;
    }
}
