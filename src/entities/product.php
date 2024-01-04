<?php
class Product {
    private $productID;
    private $productName;
    private $unit;
    private $price;
    private $img;
    private $desc;
    private $updatedAt;
    private $createdAt;

    public function __construct($productID, $productName, $unit, $price, $desc, $img, $updatedAt, $createdAt) {
        $this->productID = $productID;
        $this->productName = $productName;
        $this->unit = $unit;
        $this->price = $price;
        $this->createdAt = $createdAt;
        $this->img = $img;
        $this->desc = $desc;
        $this->updatedAt = $updatedAt;
    } 

    public function getProductID () {
        return $this->productID;
    }

    public function getProductName () {
        return $this->productName;
    }

    public function getUnit () {
        return $this->unit;
    }

    public function getPrice () {
        return $this->price;
    }

    public function getCreateAt () {
        return $this->createdAt;
    }

    public function getDesc () {
        return $this->desc;
    }

    public function getUpdatedAt () {
        return $this->updatedAt;
    }

    public function getImg () {
        return $this->img;
    }
}
?>