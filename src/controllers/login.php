<?php
    // Xử lý biến POST một cách an toàn
    if (isset($_POST['uname']) && isset($_POST['psw'])) {
        $uname = $_POST['uname'];
        $psw = $_POST['psw'];

        // require 'D:\Web Project\Pet-Shop_HCN-NDT\database\CustomerDAO.php';
        require '../../database/CustomerDAO.php';
        $customerDAO = new CustomerDAO();
        
        // Lấy thông tin khách hàng từ cơ sở dữ liệu
        $customer = $customerDAO->selectByID($uname);
        
        //Kiểm tra xem có khách hàng không
        if ($customer) {
            // So sánh mật khẩu bằng password_verify
            if ($psw == $customer->getPSW()) {
                echo "<script>alert('Login Successful!');</script>";
                // Chuyển trang về trang chủ
                header ("Location: ../../index.php");
                exit;
            } else {
                echo "<script>alert('Wrong password!');</script>";
            }
        } else {
            echo "<script>alert('User not found!');</script>";
            header ("Location: ../../index.php");
        }
    } else {
        echo "<script>alert('Invalid input!');</script>";
    }
?>