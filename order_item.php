<?php

include "db.php";
session_start();

/* STEP 1: insert order */
$user_id = $_SESSION['user_id'];
$total = 1000;

$conn->query("INSERT INTO orders (user_id, total_amount, status)
VALUES ('$user_id', '$total', 'pending')");

$order_id = $conn->insert_id;

/* STEP 2: cart se items lo */
foreach($_SESSION['cart'] as $product_id){

    // product details lo
    $res = $conn->query("SELECT * FROM products WHERE id=$product_id");
    $product = $res->fetch_assoc();

    $price = $product['price'];
    $qty = 1;
    $total = $price * $qty;

    // STEP 3: order_items insert
    $conn->query("INSERT INTO order_items 
    (order_id, product_id, quantity, price, total)
    VALUES 
    ('$order_id', '$product_id', '$qty', '$price', '$total')");
}

echo "Order placed successfully!";
?>