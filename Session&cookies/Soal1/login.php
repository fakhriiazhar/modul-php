<?php
session_start();
// Redirect ke home jika user sudah login
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>

<?php include('header.php'); ?>

<div class="content">
    <h2>Silakan Login</h2>
    <form action="proses_login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <?php
    if (isset($_GET['error'])) {
        echo "<p class='error'>{$_GET['error']}</p>";
    }
    ?>
</div>

<?php include('footer.php'); ?>
