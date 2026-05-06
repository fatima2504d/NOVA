<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Jewellery Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1 class="title">Our Jewellery Collection 💎</h1>

<div class="products">

<?php
$result = mysqli_query($conn, "SELECT * FROM products");

while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="card">
        <img src="<?php echo $row['image']; ?>" alt="">
        <h3><?php echo $row['name']; ?></h3>
        <p class="price">Rs <?php echo $row['price']; ?></p>
        <p class="desc"><?php echo $row['description']; ?></p>
        <button>Buy Now</button>
    </div>
<?php } ?>

</div>

</body>
</html>

