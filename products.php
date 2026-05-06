<?php
include "db.php";

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<title>Jewelry Products</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<style>
    body {
    font-family: Arial;
}

.card {
    border-radius: 15px;
}

h2 {
    color: #b76e79; /* jewelry theme */
}

h5 {
    color: #444;
}

.btn-primary {
    background-color: #b76e79;
    border: none;
}

.btn-primary:hover {
    background-color: #a45c65;
}
</style>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Our Jewelry Collection </h2>

    <div class="row">

        <?php while($row = $result->fetch_assoc()) { ?>

        <div class="col-md-4">
            <div class="card shadow mb-4 p-3">

                <h5 class="text-center"><?php echo $row['products_name']; ?></h5>

                <p><strong>Category:</strong> <?php echo $row['category']; ?></p>
                <p><strong>Brand:</strong> <?php echo $row['brand']; ?></p>
                <p><strong>Metal:</strong> <?php echo $row['metal']; ?></p>
                <p><strong>Size:</strong> <?php echo $row['size']; ?></p>

                <h4 class="text-center text-danger">
                    Rs. <?php echo $row['price']; ?>
                </h4>

                <button class="btn btn-primary w-100">Buy Now</button>

            </div>
        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>