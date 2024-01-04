<?php
session_start();
require_once("../service/user_service.php");
# Kiểm tra xem có phải là role admin không, nếu không thì không cho vào trang này
// if ((!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin')) {
//    header("Location: ../index.php");
// }

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $userService = new UserService ();
   $result = $userService->delete($id);
   header("Location: ../../user-management.php");
   exit();
} else {
   echo "Delete faild!";
}