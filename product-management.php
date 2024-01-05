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
<title>Pet Shop - Product Management</title>
<link rel="stylesheet" href="./assets/css/management.css">

<div class="display-area">
    <div class="container">
        <h1 class="heading">List Of Products</h1>
        <div class="row">
            <a href="./edit-product.php" class="create-btn">
                <i class="fa-solid fa-plus"></i>
                <span class="ms-2">Create New Product</span>
            </a>
            <div>
                <label for="search-input">Search:</label>
                <input type="text" id="search-table" name="search">
            </div>
        </div>
        <table id="table-product">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Unit</th>
                    <th>Price</th>
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
                    <td><img src="<?= $product->getImg() ?>" alt="" width="50" height="50" style="object-fit: cover;">
                    </td>
                    <td><span class="product-name"><?= $product->getProductName() ?></span></td>
                    <td><?= $product->getUnit() ?></td>
                    <td><span><?= number_format($product->getPrice(), 0, '', ',') ?></span></td>
                    <td><span><?= $product->getCreateAt() ?></span></td>
                    <td><span><?= $product->getUpdatedAt() ?></span></td>
                    <td>
                        <div class="table-action">
                            <button class="action-button action-delete"
                                onclick="handleDeleteConfirm(<?=$product->getProductID()?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#fff" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <a href="./edit-product.php?id=<?= $product->getProductID() ?>"
                                class="action-button action-edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#fff" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
</div>
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

<?php
    include_once("./templates/footer.php");
?>