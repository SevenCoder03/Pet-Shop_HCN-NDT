<?php

class User {
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;
    private $phoneNumber;
    private $address;
    private $userType;
    private $gender;

    public function __construct($id, $name, $gender, $username, $email, $password, $phoneNumber, $address, $userType) {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->userType = $userType;
    } 

    public function getId () {
        return $this->id;
    }

    public function getUser_type () {
        return $this->userType;
    }

    public function getName () {
        return $this->name;
    }

    public function getPassword () {
        return $this->password;
    }

    public function getEmail () {
        return $this->email;
    }

    public function getPhoneNumber () {
        return $this->phoneNumber;
    }

    public function getUsername () {
        return $this->username;
    }

    public function getAddress () {
        return $this->address;
    }

    public function getGender () {
        return $this->gender;
    }
}
?>