<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../fonts/fontawesome-free-6.4.0-web/css/all.min.css">

<?php
session_start();
require_once("./src/service/user_service.php");

# Kiểm tra xem có đang đăng nhập hay không, nếu không thì không cho vào trang này
// if (!isset($_SESSION['is_login'])) {
//    header("Location: ../index.php");
// }

# Kiểm tra vai trò của người dùng
// if ($_SESSION['role'] === 'customer' || $_SESSION['role'] === 'admin') {
//    $customerId = $_GET['id'] ?? 0;
//    if ($customerId != $_SESSION['user']['id']) {
//       header("Location: ../ngoai-le/404-not-found.php");
//    }
// }

$userService = new UserService ();

# Biến để nhận biết xem form này hiện tại là đang thêm hay chỉnh sửa
$type = isset($_GET['id']) ? 'update' : 'add';

$data = null;
$isCheckUsername = null;

# Kiểm tra xem có phải là phương thức post được sumbmit không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   try {
        $uname = $_POST['username'];
        $name = $_POST['name'];
        $pass = md5($_POST['password']);
        $gender = $_POST['gender'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $user = new User ($id, $name, $gender, $uname, $email, $pass, $phoneNumber, $address, $role);
      if ($type === "add") {
         # kiểm tra username xem đã tồn tại chưa
         $isCheckUsername = $userService->selectByUsername($uname);
      }
      if (!$isCheckUsername) {
         # Kiểm tra xem đang là form gì để xử lý query
         if ($type === "add") {
            $result = $userService->insert($user);
         } else {
            $result = $userService->update($user);
         }
         # mã hoá mật khẩu
        //  if (empty($_POST['password'])) {
        //     $params['password'] = $user['0']['password'];
        //  } else {
        //     $params['password'] = password_hash($_POST['password'], null);
        // //  }
        //  $result = $db->query($query, $params);
         # Thông báo thành công / thất bại
         if ($result) {
            if ($type === "add") {
               $message = "User added successfully!";
            } else {
               $message = "User updated successfully!";
            }
            # Để css ở dưới
            $status = 'success';        
         } else {
            $message = "Error while processing data!";
            $status = 'danger';
         }
      } else {
         # Nếu tồn tại username rồi thì thông bái lỗi
         $message = "This account has already existed!!!";
         $status = 'danger';
      }
   } catch (Exception $exception) {
      $message = "Error while processing data!";
      $status = 'danger';
   }
}

# Nếu form là update thì lấy dữ liệu để hiện lên form
if ($type === "update") {
    $id = $_GET['id'];
    $data = $userService->selectById($id);
    $id_loggedin = $_SESSION['id_loggedin'];
}

?>

<div class="container">
   <h1 style = "font-size: 30px; margin-top: 30px; text-transform: uppercase;" class="txttitle text-center"><?= $type === "add" ? "Add User Information" : "Edit User Information" ?></h1>
   <div class="d-flex align-items-center justify-content-center">
      <?php if (isset($message)) : ?>
      <div class="alert alert-<?= $status ?> d-inline-block" role="alert">
         <?= $message ?>
      </div>
      <?php endif; ?>
   </div>
   <form style= "margin-top: 50px;" action="./edit-user.php<?= $type === "update" ? "?id=" . $data->getId() : '' ?>" method="post">
      <input type="number" name="id" hidden value="<?= $type === "update" ? $data->getId() : "0" ?>">
      <div class="row">
         <div class="form-floating mb-3 col-6">
            <input <?php //$type === "update" ? 'disabled' : '' ?> type="text" class="form-control" id="username" required
               name="username" placeholder="Username"
               value="<?= $type === "update" ? $data->getUsername() : "" ?> "
               <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : ''?>>

            <label class="ms-2" for="username">Username</label>
         </div>
         <div class="form-floating mb-3 col-6">
            <input <?= $type === "update" ? '' : 'required' ?> type="password" class="form-control" id="password"
               name="password" placeholder="Password"
               <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : ''?>>
            <label class="ms-2" for="password">Password</label>
         </div>
         <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="name" required name="name" placeholder="Full name"
               value="<?= $type === "update" ? $data->getName() : "" ?>"
               <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : ''?>>
            <label class="ms-2" for="fullName">Name</label>
         </div>
         <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="address" required name="address" placeholder="Address"
               value="<?= $type === "update" ? $data->getAddress() : "" ?>"
               <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : ''?>>
            <label class="ms-2" for="address">Address</label>
         </div>
         <div class="form-floating mb-3 col-6">
            <input type="email" class="form-control" id="email" required name="email" placeholder="Email"
               value="<?= $type === "update" ? $data->getEmail() : "" ?>"
               <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : ''?>>
            <label class="ms-2" for="email">Email</label>
         </div>
         <div class="form-floating mb-3 col-6">
            <input type="tel" class="form-control" id="phoneNumber" required name="phoneNumber" placeholder="Phone Number"
               value="<?= $type === "update" ? $data->getPhoneNumber() : "" ?>"
               <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : ''?>>
            <label class="ms-2" for="phoneNumber">Phone Number</label>
         </div>
         <div class="form-floating mb-3 col-6">
            <select class="form-select" id="gender" name="gender" aria-label="Floating label select example" <?= (isset($id_loggedin) && $id_loggedin != $data->getId()) ? "disabled" : '' ?>>
                <option value="0" <?= ($type === "update" && $data->getGender() == 0) ? 'selected' : '' ?>>Female</option>
                <option value="1" <?= ($type === "update" && $data->getGender() == 1) ? 'selected' : '' ?>>Male</option>
            </select>
            <label class="ms-2" for="gender">Gender</label>
        </div>
         <div class="form-floating mb-3 col-6">
            <select class="form-select" id="role" name="role" aria-label="Floating label select example">
               <option value="user" <?= ($type === "update" && $data->getUser_type() === "user") ? 'selected' : '' ?>>
                  User</option>
               <?php if ($_SESSION['role'] !== 'user') : ?>
                  <option value="admin" <?= ($type === "update" && $data->getUser_type() === "admin") ? 'selected' : '' ?>>Admin</option>
               <?php endif; ?>
            </select>
            <label class="ms-2" for="role">Role</label>
         </div>
      </div>
      <!-- <?php //if ($type === "add") : ?>
            <span class="mb-2">Ảnh đại diện: </span>
            <div class="input-group mt-3 mb-3">
                <input type="file" id="avatar" name="avatar" required class="form-control" accept="image/png, image/jpeg" />
            </div>
        <?php //endif; ?> -->
      <div class="d-flex align-items-center justify-content-end mt-5">
         <a href="./user-management.php" class="btn btn-danger me-3"><i class="fa-solid fa-users me-2"></i>List Of Users</a>
         <button type="submit" class="btn btn-primary"><i style="font-size: 24px;" class="fa-solid fa-floppy-disk"></i></button>
      </div>
   </form>
</div>