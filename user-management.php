<?php
session_start();
require_once("./src/service/user_service.php");
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

include_once("./templates/header.php");

$userService = new UserService();
$datas = $userService->selectAll();

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="../fonts/fontawesome-free-6.4.0-web/css/all.min.css">
<link rel="stylesheet" href="./assets/css/product-management.css">

<div class="container">
   <h1 class="txttitle text-center">List Of Users</h1>
   <table id="table-user">
      <thead>
         <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Role</th>
            <th>Action</th>
         </tr>
      </thead>
      <?php if (!empty($datas)) : ?>
      <tbody>
         <?php foreach ($datas as $data) : ?>
         <tr>
            <td><?= $data->getId() ?></td>
            <td><span class="user-name"><?= $data->getUsername() ?></span></td>
            <td><?= $data->getName() ?></td>
            <td><?= $data->getGender() == 1 ? "Male" : "Female" ?></td>
            <td><span><?= $data->getAddress() ?></span></td>
            <td><span><?= $data->getEmail() ?></span></td>
            <td><?= $data->getPhoneNumber() ?></td>
            <td><span
                  class="badge bg-<?= $data->getUser_type() === 'user' ? 'success' : 'danger' ?>"><?= $data->getUser_type() ?></span>
            </td>
            <td>
               <div class="d-flex align-items-center justify-content-center">
                  <button class="btn btn-danger me-3" onclick="handleDeleteConfirm(<?= $data->getId() ?>)">
                     <!-- <i class="fa-regular fa-trash-can"></i> -->
                     Delete
                  </button>
                  <a href="./edit-user.php?id=<?= $data->getId() ?>" class="btn btn-primary">
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
   $('#table-user').DataTable();
});

function handleDeleteConfirm(id) {
   const href = "./src/controller/delete-user.php?id=" + id;
   const isDeleted = confirm(`Do you want to delete the customer whose id is ${id}?`);
   if (isDeleted) {
      window.location.href = href;
   }
}
</script>

<?php
    include_once("./templates/footer.php");
?>