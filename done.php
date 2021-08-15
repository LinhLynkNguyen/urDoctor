<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "urdoctor";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Không thể kết nối đến cơ sở dữ liệu");
}

// tạo table nhận lịch khám
$result = $conn->query("CREATE TABLE IF NOT EXISTS `form`(
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `age` int,
    `address` VARCHAR(255) NOT NULL,
    `problem` LONGTEXT NOT NULL,
    `meetingtime` VARCHAR(255) NOT NULL)");

if(
    isset($_POST['name']) ||
    isset($_POST['problem']) ||
    isset($_POST['meetingtime'])
) {
    $age = isset($_POST['age']) ? $_POST['age'] : 0;
    $address = isset($_POST['address']) ? $_POST['address'] : "Không có";
    $result = $conn->query("INSERT INTO `form`(`name`, `age`, `address`, `problem`, `meetingtime`)
        VALUES('{$_POST['name']}', $age, '$address', '{$_POST['problem']}', '{$_POST['meetingtime']}')");
    echo "Đặt lịch thành công! Quay lại <a href='/'>trang chủ.</a>";
}