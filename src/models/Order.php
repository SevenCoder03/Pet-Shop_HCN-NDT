<?php
    Class Order {
        private $orderID;
        private Customer $customer;
        private $orderDate;
        private $deliveryDate;
        private $totalPrice;
        private $payments;
        private $paymentStatus;
        private $deliveryAddress;
        private $status;

        public function __construct ($orderID, Customer $customer, $orderDate, $deliveryDate, $totalPrice, $payments, $paymentStatus, $deliveryAddress, $status) {
            $this->orderID = $orderID;
            $this->customer = $customer;
            $this->orderDate = $orderDate;
            $this->deliveryDate = $deliveryDate;
            $this->totalPrice = $totalPrice;
            $this->payments = $payments;
            $this->paymentStatus = $paymentStatus;
            $this->deliveryAddress = $deliveryAddress;
            $this->status = $status;   
        }

        public function getOrderID () {
            return $this->orderID;
        }

        public function setOrderID ($orderID) {
            $this->orderID = $orderID;
        }

        public function getCustomer () {
            return $this->customer;
        }

        public function setCustomer (Customer $customer) {
            $this->customer = $customer;
        }

        public function getOrderDate () {
            return $this->orderDate;
        }

        public function setOrderDate ($orderDate) {
            $this->orderDate = $orderDate;
        }

        public function getDeliveryDate () {
            return $this->deliveryDate;
        }

        public function setDeliveryDate ($deliveryDate) {
            $this->deliveryDate = $deliveryDate;
        }
        
        public function getTotalPrice () {
            return $this->totalPrice;
        }

        public function setTotalPrice ($totalPrice) {
            $this->totalPrice = $totalPrice;
        }

        public function getPayments () {
            return $this->payments;
        }

        public function setPayments ($payments) {
            $this->payments = $payments;
        }

        public function getPaymentStatus () {
            return $this->paymentStatus;
        }

        public function setPaymentStatus ($paymentStatus) {
            $this->paymentStatus = $paymentStatus;
        }

        public function getDeliveryAddress () {
            return $this->deliveryAddress;
        }

        public function setDeliveryAddress ($deliveryAddress) {
            $this->deliveryAddress = $deliveryAddress;
        }

        public function getStatus () {
            return $this->status;
        }

        public function setStatus ($status) {
            $this->status = $status;
        }
    } 
?>