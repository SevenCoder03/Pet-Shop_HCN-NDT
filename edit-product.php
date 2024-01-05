<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="./assets/css/edit.css">

<?php
include_once("./templates/header.php");
require_once(__DIR__."/src/service/product_service.php");
session_start();
# Kiểm tra xem có phải là role admin không, nếu không thì không cho vào trang này

// if ((!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin')) {
//    header("Location: ../ngoai-le/404-not-found.php");
// }

# Biến để nhận biết xem form này hiện tại là đang thêm hay chỉnh sửa
$type = isset($_GET['id']) ? 'update' : 'add';

$data = null;
# Kiểm tra xem có phải là phương thức post được sumbmit không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      # Kiểm tra xem user có thêm ảnh không
      // if (!empty($_FILES['img']['tmp_name'])) {
      //    $pathUpload = "./uploads/";
      //    $nameThumnail = $_FILES['img']['name'];  // Sử dụng tên gốc của file
      //    $path = $pathUpload . $nameThumnail;
      //    $_POST['img'] = $nameThumnail;
      // }
      # Kiểm tra xem đang là form gì để xử lý query
      $name = $_POST['name'];
      $unit = $_POST['unit'];
      $price = $_POST['price'];
      $desc = $_POST['desc'];
      $id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];
      // Img
      $product = new Product ($id, $name, $unit, $price, $desc, null, null, null);
      $productService = new ProductService ();
      if ($type === "add") {
         $result = $productService->insert($product);
      } else {
         $result = $productService->update($product);
      }
      # Thông báo thành công / thất bại
      if ($result) {
         if ($type === "add") {
            $message = "Added new products successfully!!";
         } else {
            $message = "Updated product successfully!";
         }
         $status = 'success';
         # Kiểm tra xem user có thêm ảnh không
         // if (!empty($_FILES['thumbnail']['tmp_name'])) {
         //    if ($type === "update") {
         //       # Lấy data cũ để lấy tên ảnh
         //       $query = "SELECT thumbnail FROM techDevice WHERE id = " . (isset($_GET['id']) ? $_GET['id'] : $_POST['id']);
         //       $data = $db->get($query);
         //       # Xoá ảnh cũ đi
         //       $pathOld = $pathUpload . $data['0']['thumbnail'];
         //       // if (file_exists($pathOld)) {
         //       //    unlink($pathOld);
         //       // }
         //    }
         //    # thêm ảnh vào folder upload của server
         //    move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path);
         // }
      } else {
         $message = "Error while processing data!";
         $status = 'danger';
      }
}

# Nếu form là update thì lấy dữ liệu để hiện lên form
if ($type === "update") {
   $id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];
   $productService = new ProductService ();
   $data = $productService->selectByID($id);
}

?>

<div class="display-area">
    <div class="container">
        <h1 class="heading">
            <?= $type === "add" ? "Add Product Information" : "Edit Product Information" ?></h1>
        <div class="center">
            <?php if (isset($message)) : ?>
            <div class="alert alert-<?= $status ?> d-inline-block" role="alert">
                <?= $message ?>
            </div>
            <?php endif; ?>
        </div>
        <form class="form-edit" action="./edit-product.php<?= $type === "update" ? "?id=".$data->getProductID() : '' ?>"
            method="POST">
            <div class="form-input">
                <div class="input-info">
                    <label class="label" for="id">ID:</label>
                    <input type="text" class="form-control-edit" id="id" required name="id"
                        value="<?= $type === "update" ? $data->getProductID() : "" ?>">
                </div>
                <div class="input-info">
                    <label class="label" for="name">Name:</label>
                    <input type="text" class="form-control-edit" id="name" required name="name"
                        value="<?= $type === "update" ? $data->getProductName() : "" ?>">
                </div>
                <div class="input-info">
                    <label class="label" for="unit">Unit:</label>
                    <input type="text" class="form-control-edit" id="unit" required name="unit"
                        value="<?= $type === "update" ? $data->getUnit() : "" ?>">
                </div>
                <div class="input-info">
                    <label class="label" for="price">Price:</label>
                    <input type="number" min="1" class="form-control-edit" id="price"
                        value="<?= $type === "update" ? $data->getPrice() : "" ?>">
                </div>
                <div class="input-info">
                    <label class="label" for="description">Description:</label>
                    <textarea type="text" class="form-control-edit" id="description" required name="desc"
                        style="height: 100px"><?= $type === "update" ? $data->getDesc() : "" ?></textarea>
                </div>
                <div class="input-image">
                    <label class="label" for="id">Image:</label>
                    <input type="file" id="avatar" name="img" <?= $type === "add" ? "required" : "" ?>
                        class="form-control-edit" name="avatar" accept="image/png, image/jpeg" />
                </div>
                <!-- <?php if ($type === "update") : ?>
                    <img src="./uploads/<?= $data->getImg() ?>" alt="" width="200">
                    <?php endif; ?> -->
                <div class="edit-action">
                    <a href="./product-management.php" class="action-button action-back">
                        List Of Products
                    </a>
                    <button type="submit" class="action-button action-add">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once("./templates/footer.php");
?>