<?php
session_start();
require_once("../service/user_service.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = md5($_POST['psw']);
    $cpass = md5($_POST['confirmPsw']);
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $user = new User (null, $name, $gender, $uname, $email, $pass, $phoneNumber, $address , null);
    $userService = new UserService ();
    $checkEmail = $userService->selectByEmail($email);
    $checkUname = $userService->selectByUsername($uname);
    if (isset($checkEmail) || isset($checkUname)) {
        $_SESSION['error'] = 'User already exist!';
        header('Location: ../../account.php');
        exit();
    }
    else {
        if ($pass != $cpass) {
            $_SESSION['error'] = 'Password not matched!';
            header('Location: ../../account.php');
            exit();
        }
        else {
            $result = $userService->insert($user);
            header('Location: ../../account.php');
            exit();
        }
    }
}
?>
