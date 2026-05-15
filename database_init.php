<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nova_jewellery";

// Connect to MySQL (without DB first)
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL Queries
$sql = "
CREATE DATABASE IF NOT EXISTS nova_jewellery;
USE nova_jewellery;

-- Admin table
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admins (username, password)
VALUES ('admin', MD5('admin123'));

-- Jewellery table
CREATE TABLE IF NOT EXISTS jewellery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    price DECIMAL(10,2),
    image VARCHAR(255)
);

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Orders table
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    status VARCHAR(50) DEFAULT 'Pending',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES jewellery(id) ON DELETE CASCADE
);
";

// Execute multiple queries
if (mysqli_multi_query($conn, $sql)) {
    echo "Database and tables created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>