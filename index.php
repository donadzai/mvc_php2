<?php
session_start();
// echo '<pre>';
// Đây là file chạy chính (Là nơi chúng require các file)
require_once "./env.php";    // Chứa các biến môi trường
require_once "./helper.php";   // Chứa các hàm dùng chung

// require các controller mà route trỏ tới
require_once './app/Controller.php';
require_once './app/Controllers/HomeController.php';
require_once './app/Controllers/CustomerController.php';

// require Các model mà controller muốn sử dụng
require_once './app/Model.php';
require_once './app/Models/Customer.php';

// Route (Điều hướng)
$act = $_GET['act'] ?? '/';

match ($act) {
    // Nơi khai báo các đường dẫn
    '/' => (new HomeController())->index(),
    'customers' => (new CustomerController())->index(),
    'create' => (new CustomerController())->createCutomer(),
    'stored' => (new CustomerController())->storedCutomer(),
    'delete' => (new CustomerController())->deleteCustomer(),
    'edit' => (new CustomerController())->showEditView(),
    'update' => (new CustomerController())->updateCutomer(),
    'search' => (new CustomerController())->searchCustomer(),
};

// Bài tập: LAB 2:
// Tạo CSDL buoi4_php2 có bảng customers (khach_hangs)
// ho_ten, hinh_anh, email, so_dien_thoai, ngay_sinh, trang_thai

// Sử dụng base đã được cung cập để thực hiện các chức năng
// Hiển thị, tìm kiếm, thêm, sửa, xóa của bảng custumers (khach_hangs)

// Trong bài làm phải sử dụng tối thiểu 2 tính chất (đóng gói, kế thừa)

// Nâng cao: Sử dụng được abstract class trong bài làm