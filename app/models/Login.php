<?php

$koneksi = new PDO("mysql:host=localhost;dbname=pbwl_mvc", "root", "");
 
if (isset($_POST['btn_login'])) {

    $user_password = $_POST['user_password'];
    $user_nama = $_POST['user_nama'];

    $sql = "SELECT * FROM tb_users 
    WHERE user_password=:user_password AND user_nama=:user_nama";

    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(":user_password", $user_password);
    $stmt->bindParam(":user_nama", $user_nama);
    $stmt->execute();

    $result = $stmt->fetch();

    if (!empty($result)) {
        header("dashboard");
    } else {
        header("index"); 
    }
}