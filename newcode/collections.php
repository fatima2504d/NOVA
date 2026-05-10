<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Jewellery Collection</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

html{
    font-size:62.5%;
}

body{
    background:#fdfaf6;
}

 h2 {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        margin-bottom: 40px;
    }
/* GRID SAME */
.container{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(30rem,1fr));
    gap:2rem;
    padding:2rem;
}

/* CARD */
.product{
    background:#fff;
    padding:3rem 2rem;
    text-align:center;
    border-radius:1.5rem;
    box-shadow:0 8px 20px rgba(0,0,0,0.05);
    position:relative;
    overflow:hidden;
}

/* IMAGE */
.product img{
    width:26rem;
    transition:0.4s;
}

/* ZOOM EFFECT */
.product:hover img{
    transform:scale(1.1);
}

/* TITLE */
.product h3{
    font-size:1.5rem;
    margin-top:1rem;
    color:#333;
}

/* PRICE */
.price{
    font-size:1.4rem;
    color:#c9a34e;
    margin-top:0.5rem;
}

/* BUTTON */
.btn{
    margin-top:1rem;
    padding:0.8rem 1.5rem;
    border-radius:2rem;
    background:#c9a34e;
    color:#fff;
    font-size:1.3rem;
    cursor:pointer;
    display:inline-block;
}

/* HOVER BUTTON SHOW */
.product .btn{
    opacity:0;
    transform:translateY(20px);
}

.product:hover .btn{
    opacity:1;
    transform:translateY(0);
}

/* CART BOX */
/* .cart{
    position:fixed;
    top:20px;
    right:20px;
    background:#fff;
    padding:1rem 2rem;
    border-radius:1rem;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    font-size:1.4rem;
} */
</style>

</head>
<body>
    <?php include 'navbarnova.php'; ?>

<!-- <div class="cart">
 Cart: <span id="cart-count">0</span>
</div> -->
<div class="container mt-4">
 <h2 class="text-center mb-4">Our Jewelry Collection </h2>
</div>


<div class="container">

<div class="product">
    <img src="rings/ring 2.webp">
    <h3>Diamond Ring</h3>
    <div class="price">$120</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

<div class="product">
    <img src="bracelet/b 5.webp">
    <h3>Luxury Necklace</h3>
    <div class="price">$200</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

<div class="product">
    <img src="earrings/Tiffany hard ware.webp">
    <h3>Gold Earrings</h3>
    <div class="price">$90</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>


</div>

<div class="container">

<div class="product">
    <img src="rings/ring 4.webp">
    <h3>Diamond Ring</h3>
    <div class="price">$120</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

<div class="product">
    <img src="bracelet/return to tiffany.webp">
    <h3>Luxury Necklace</h3>
    <div class="price">$200</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

<div class="product">
    <img src="earrings/paloma picasso.webp">
    <h3>Gold Earrings</h3>
    <div class="price">$90</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

</div>

<?php include 'footerpage.php'; ?>



</body>
</html>