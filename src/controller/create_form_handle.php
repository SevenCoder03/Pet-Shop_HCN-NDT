<?php
session_start();
require_once(__DIR__ . "/../service/product_service.php");
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $unit = $_POST["unit"];
    $price = $_POST["price"];

    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['unit'] = $unit;
    $_SESSION['price'] = $price;
    if (empty($id) || empty($name) || empty($unit) || empty($price)) {
        $error = "All the fields are required!";
        header("Location: ../create_form.php");
    } else {
        $productService = new ProductService();
        $check = $productService->selectByID($id);
        if (!isset($check)) {
            $product = new Product($id, $name, $unit, $price, null);
            $result = $productService->insert($product);
            if ($result != null) {
                header("Location: ../admin_page.php");
                unset($_SESSION['id']);
                unset($_SESSION['name']);
                unset($_SESSION['unit']);
                unset($_SESSION['price']);
                unset($_SESSION['error']);
                exit;
            }
        } else {
            $error = "Product code already exists!";
            header("Location: ../create_form.php");
        }
    }
}

$_SESSION['error'] = $error;
?>
