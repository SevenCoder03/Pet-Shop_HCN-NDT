<?php
session_start();
require_once(__DIR__."/../service/user_service.php");

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $psw = md5($_POST['psw']);

    $userService = new UserService ();
    if (filter_var($uname, FILTER_VALIDATE_EMAIL)) {
        $result = $userService->selectByEmail($uname);
    }
    else {
        $result = $userService->selectByUsername($uname);
    }

    if (isset($result)) {
        if ($psw == $result->getPassword()) {
            $_SESSION['role'] = $result->getUser_type();
            header("Location: ../../index.php");
            $_SESSION['logged_in'] = true;
            $_SESSION['id_loggedin'] = $result->getId();
        } else {
            $_SESSION['error'] = "incorrect email or password!";
            header("Location: ../../blog.php");
            exit();
        }
    }
    else {
        $_SESSION['error'] = "Account does not exist!";
        header("Location: ../../contact.php");
        exit();
    }
}

?>
