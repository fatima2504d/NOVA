<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<h1>Welcome to NOVA Admin Panel</h1>

<a href="jewellery.php">Manage Jewellery</a><br>
<a href="users.php">Manage Users</a><br>
<a href="orders.php">Manage Orders</a><br>
<a href="logout.php">Logout</a>