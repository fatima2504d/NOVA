<?php
$conn = new mysqli("localhost", "root", "", "jeani_jewllery");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>