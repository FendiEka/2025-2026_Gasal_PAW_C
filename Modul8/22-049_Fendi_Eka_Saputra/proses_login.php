<?php
session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $_SESSION['login']   = true;
    $_SESSION['id']      = $row['id'];
    $_SESSION['username']= $row['username'];
    $_SESSION['level']   = $row['level']; // 1 atau 2

    header("Location: index.php");
} else {
    header("Location: login.php?pesan=Username atau password salah");
}
?>
