<?php
// File chứa các biến muôi trường trong hệ thống
// Khai báo các biến dưới dạng HẰNG SỐ để ko phải sử dụng $GLOBALS

define('APP_URL', 'http://localhost/mvc_php2/'); // Đường dẫn chạy dự án

define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'php2'); // Tên database //

define('PATH_ROOT', __DIR__);
define('PATH_VIEW', PATH_ROOT . '/views/');
define('PATH_MODEL', PATH_ROOT . '/app/Models/');
define('PATH_CONTROLLER', PATH_ROOT . '/app/Controllers/');
