<?php
session_start();
require_once("../service/product_service.php");
# Kiểm tra xem có phải là role admin không, nếu không thì không cho vào trang này
// if ((!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin')) {
//    header("Location: ../index.php");
// }

if (isset($_GET['id'])) {
   # Lấy data cũ để lấy tên ảnh
   // $query = "SELECT thumbnail FROM techDevice WHERE id = " . $_GET['id'];
   // $data = $db->get($query);
   // # Xoá ảnh cũ đi
   // $pathUpload = "D:\\xampp\htdocs\ASM3\dang-tai\\";
   // $pathOld = $pathUpload . $data['0']['thumbnail'];
   // if (file_exists($pathOld)) {
   //    unlink($pathOld);
   // }

   $id = $_GET['id'];
   $productService = new ProductService ();
   $result = $productService->delete($id);
   header("Location: ../../product-management.php");
   exit();
} else {
   echo "Delete failed!";
}
