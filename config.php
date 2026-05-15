<?php
$conn = mysqli_connect("localhost", "root", "", "nova_jewellery");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>