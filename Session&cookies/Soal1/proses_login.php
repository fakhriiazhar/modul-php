<?php
session_start();

// Array username dan password
$users = [
    "AAA" => "Password1",
    "BBB" => "Password2",
    "CCC" => "Password3",
    "DDD" => "Password4",
];

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi login
if (isset($users[$username])) {
    if ($users[$username] === $password) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        // Password salah
        header("Location: login.php?error=Password yang dimasukkan salah!");
        exit();
    }
} else {
    // Username tidak ditemukan
    header("Location: login.php?error=Username tidak terdaftar!");
    exit();
}
?>
