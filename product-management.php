<?php
session_start();
require_once(__DIR__."/src/service/product_service.php");

if (!isset($_SESSION['logged_in'])) {
      header("Location: ./account.php");
      exit();
}
else {
   if ((!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin')) {
      header("Location: ./404.php");
      exit();
   }
}
      
   $productService = new ProductService ();
   $products = $productService->selectAll();
         
   include_once("./templates/header.php");
?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="../fonts/fontawesome-free-6.4.0-web/css/all.min.css">
<title>Pet Shop - Product Management</title>
<link rel="stylesheet" href="./assets/css/product-management.css">

<div class="container">
   <h1 class="txttitle text-center">List Of Products</h1>
   <div class="tab-select d-flex align-items-center">
      <a href="./edit-product.php" class="btn btn-success my-3 d-inline-flex align-items-center justify-content-center">
         <i class="fa-solid fa-plus"></i>
         <span class="ms-2">Create New Product</span>
      </a>
   </div>
   <table id="table-product">
      <thead>
         <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
         </tr>
      </thead>
      <?php if (!empty($products)) : ?>
      <tbody>
         <?php foreach ($products as $product) : ?>
         <tr>
            <td><?= $product->getProductID() ?></td>
            <td><img src="../uploads/<?= $product->getImg() ?>" alt="" width="50" height="50"
                  style="object-fit: cover;"></td>
            <td><span class = "product-name"><?= $product->getProductName() ?></span></td>
            <td><?= $product->getUnit() ?></td>
            <td><span><?= number_format($product->getPrice(), 0, '', ',') ?></span></td>
            <td class="description-cell"><span><?= $product->getDesc() ?></span></td>
            <td><span><?= $product->getCreateAt() ?></span></td>
            <td><span><?= $product->getUpdatedAt() ?></span></td>
            <td>
               <div class="d-flex align-items-center justify-content-center">
                  <button class="btn btn-danger me-3" onclick="handleDeleteConfirm(<?=$product->getProductID()?>)">
                     <!-- <i class="fa-regular fa-trash-can"></i> -->
                     Delete
                  </button>
                  <a href="./edit-product.php?id=<?= $product->getProductID() ?>" class="btn btn-primary">
                     <!-- <i class="fa-regular fa-pen-to-square"></i> -->
                     Edit
                  </a>
               </div>
            </td>
         </tr>
         <?php endforeach; ?>
      </tbody>
      <?php endif; ?>
   </table>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
    $('#table-product').DataTable();
    });
    function handleDeleteConfirm(id) {
    const href = "./src/controller/delete-product.php?id=" + id;
    const isDeleted = confirm(`[ID = ${id}], Do you want to delete this product?`);
    if (isDeleted) {
        window.location.href = href;
        alert(`[ID = ${id}], Deleted this product successfully!`);
    }
    }
</script>