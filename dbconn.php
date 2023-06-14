<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
if (!$conn) {
    echo "เชื่อมต่อไม่สำเร็จ";
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
}
?>