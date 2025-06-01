<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include('header.php'); ?>

<div class="content">
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <nav>
        <a href="link1.php">Link 1</a> |
        <a href="link2.php">Link 2</a> |
        <a href="link3.php">Link 3</a> |
        <a href="logout.php">Logout</a>
    </nav>
</div>

<?php include('footer.php'); ?>
