<?php
    Class Customer {
        private $customerID;
        private $customerName;
        private $dob;
        private $gender;
        private $email;
        private $phoneNumber;
        private $address;
        private $username;
        private $psw;

        public function __construct($customerID, $customerName, $dob, $gender, $email, $phoneNumber, $address, $username, $psw) {
            $this->customerID = $customerID;
            $this->customerName = $customerName;
            $this->dob = $dob;
            $this->gender = $gender;
            $this->email = $email;
            $this->phoneNumber = $phoneNumber;
            $this->address = $address;
            $this->username = $username;
            $this->psw = $psw;
        }

        public function getCustomerID () {
            return $this->customerID;
        }

        public function setCustomerID($customerID) {
            $this->$customerID = $customerID;
        }

        public function getCustomerName () {
            return $this->customerName;
        }

        public function setCustomerName ($customerName) {
            $this->$customerName = $customerName;
        }

        public function getDOB () {
            return $this->dob;
        }

        public function setDOB ($dob) {
            $this->$dob = $dob;
        }

        public function getGender () {
            return $this->gender;
        }

        public function setGender ($gender) {
            $this->$gender = $gender;
        }

        public function getEmail () {
            return $this->email;
        }

        public function setEmail ($email) {
            $this->$email = $email;
        }

        public function getPhoneNumber () {
            return $this->phoneNumber;
        }

        public function setPhoneNumber ($phoneNumber) {
            $this->$phoneNumber = $phoneNumber;
        }

        public function getAddress () {
            return $this->address;
        }

        public function setAddress ($address) {
            $this->$address = $address;
        }

        public function getUsername () {
            return $this->username;
        }

        public function setUsername ($username) {
            $this->$username = $username;
        }

        public function getPSW () {
            return $this->psw;
        }

        public function setPSW ($psw) {
            $this->$psw = $psw;
        }
    }
?>