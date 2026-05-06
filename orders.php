<!DOCTYPE html>
<html>
<head>

    <title>Create Order</title>
</head>
<body>

<h2>Create Order</h2>

<form action="orders.php" method="POST">

    <label>User ID:</label><br>
    <input type="number" name="user_id" required><br><br>

    <label>Total Amount:</label><br>
    <input type="number" step="0.01" name="total_amount" required><br><br>

    <label>Status:</label><br>
    <input type="text" name="status" value="pending" required><br><br>

    <label>Payment Method:</label><br>
    <select name="payment_method">
        <option value="COD">Cash on Delivery</option>
        <option value="card">Card</option>
    </select><br><br>

    <label>Address:</label><br>
    <textarea name="address" required></textarea><br><br>

    <label>City:</label><br>
    <input type="text" name="city" required><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" required><br><br>

    <button type="submit">Place Order</button>

</form>

</body>
</html>

<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST['user_id'];
    $total_amount = $_POST['total_amount'];
    $status = $_POST['status'];
    $payment_method = $_POST['payment_method'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO orders 
    (user_id, total_amount, status, payment_method, address, city, phone) 
    VALUES 
    ('$user_id', '$total_amount', '$status', '$payment_method', '$address', '$city', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>