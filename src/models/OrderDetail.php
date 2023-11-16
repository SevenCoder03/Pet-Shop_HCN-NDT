<?php
    Class OrderDetail {
        private $orderDetailID;
        private Order $order;
        private Product $product;
        private $quantity;
        private $discount;
        private $totalMoney;

        public function __construct ($orderDetailID, Order $order, Product $product, $quantity, $discount, $totalMoney) {
            $this->orderDetailID = $orderDetailID;
            $this->order = $order;
            $this->product = $product;
            $this->quantity = $quantity;
            $this->discount = $discount;
            $this->totalMoney = $totalMoney;
        }

        public function getOrderDetailID () {
            return $this->orderDetailID;
        }

        public function setOrderDetailID ($orderDetailID) {
            $this->orderDetailID = $orderDetailID;
        }

        public function getOrder () {
            return $this->order;
        }

        public function setOrder (Order $order) {
            $this->order = $order;
        }

        public function getProduct () {
            return $this->product;
        }

        public function setProduct (Product $product) {
            $this->product = $product;
        }

        public function getDiscount () {
            return $this->discount;
        }

        public function setDiscount ($discount) {
            $this->discount = $discount;
        }

        public function getTotalMoney () {
            return $this->totalMoney;
        }

        public function setTotalMoney ($totalMoney) {
            $this->totalMoney = $totalMoney;
        }
    }
?>