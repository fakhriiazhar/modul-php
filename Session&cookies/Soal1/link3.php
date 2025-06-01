<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include('header.php'); ?>

<div class="content">
    <h2>Halaman Link 3</h2>
    <p>Ini adalah halaman konten untuk Link 3.</p>
</div>

<?php include('footer.php'); ?>
