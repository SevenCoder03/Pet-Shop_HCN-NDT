<?php
    Class Product {
        private $productID;
        private $productName;
        private $desc;
        private $price;
        private $stockQuantity;
        private $imgURL;
        private Category $category;

        public function __construct($productID, $productName, $desc, $price, $stockQuantity, Category $category, $imgURL) {
            $this->productID = $productID;
            $this->productName = $productName;
            $this->desc = $desc;
            $this->price = $price;
            $this->stockQuantity = $stockQuantity;
            $this->imgURL = $imgURL;
            $this->category = $category;
        }

        public function getProductID () {
            return $this->productID;
        }

        public function setProductID ($productID) {
            $this->productID = $productID;
        }

        public function getProductName () {
            return $this->productName;
        }

        public function setProductName ($productName) {
            $this->productName = $productName;
        }

        public function getDesc () {
            return $this->desc;
        }

        public function setDesc ($desc) {
            $this->desc = $desc;
        }

        public function getPrice () {
            return $this->price;
        }

        public function setPrice ($price) {
            $this->price = $price;
        }

        public function getStockQuantity () {
            return $this->stockQuantity;
        }

        public function setStockQuantity ($stockQuantity) {
            $this->stockQuantity = $stockQuantity;
        }

        public function getImgURL () {
            return $this->imgURL;
        }

        public function setImgURL ($imgURL) {
            $this->imgURL = $imgURL;
        }

        public function getCategory () {
            return $this->category;
        }

        public function setCategory (Category $category) {
            $this->category = $category;
        }
    }
?>