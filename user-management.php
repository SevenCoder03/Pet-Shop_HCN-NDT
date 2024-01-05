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

<link rel="stylesheet" href="./assets/css/management.css">

<div class="display-area">
    <div class="container">
        <h1 class="heading">List Of Users</h1>
        <div class="center">
            <div>
                <label for="search-input">Search:</label>
                <input type="text" id="search-table" name="search">
            </div>
        </div>
        <table id="table-user">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
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
                        <div class="table-action">
                            <button class="action-button action-delete"
                                onclick="handleDeleteConfirm(<?= $data->getId() ?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#fff" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <a href="./edit-user.php?id=<?= $data->getId() ?>" class="action-button action-edit">
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