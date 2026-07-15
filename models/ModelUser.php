<?php

include_once "./database/connect.php";

// Đăng ký tài khoản
function register($ten, $email, $pass)
{
    global $conn;
    $sql = "INSERT INTO TAIKHOAN (TenTaiKhoan, Email, MatKhau, Quyen) Values (:TenTaiKhoan, :Email, :MatKhau, 0)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":TenTaiKhoan", $ten, PDO::PARAM_STR);
    $stmt->bindValue(":Email", $email, PDO::PARAM_STR);
    $stmt->bindValue(":MatKhau", $pass, PDO::PARAM_STR);
    return $stmt->execute();
}