<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NOVA Jewellery</title>

<!-- Elegant Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
        color: #444;
    }

    /* HERO */
    .hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 80px 8%;
        background: #faf8f5;
        gap: 40px;
    }

    .hero-text {
        flex: 1;
    }

    .hero-text h1 {
        font-family: 'Playfair Display', serif;
        font-size: 48px;
        margin-bottom: 20px;
        letter-spacing: 2px;
    }

    .hero-text p {
        font-weight: 300;
        line-height: 1.8;
        font-size: 16px;
    }

    .hero-btn {
        margin-top: 20px;
        padding: 10px 20px;
        border: 1px solid #c8a97e;
        color: #c8a97e;
        text-decoration: none;
        border-radius: 25px;
        display: inline-block;
        transition: 0.3s;
    }

    .hero-btn:hover {
        background: #c8a97e;
        color: white;
    }

    .hero-image {
        flex: 1;
        text-align: center;
    }

    .hero-image img {
        width: 100%;
        max-width: 420px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    /* CATEGORY */
    .Categorys {
        padding: 60px 8%;
        text-align: center;
    }

    .Categorys h2 {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        margin-bottom: 40px;
    }
    /*tiffiney*/
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


    /* FOOTER */
    .footer {
        background: #f8f5f0;
        text-align: center;
        padding: 30px;
        margin-top: 50px;
        font-size: 14px;
        font-weight: 300;
    }

    .gold {
        color: #c8a97e;
    }

    /* RESPONSIVE */
    @media(max-width: 768px) {
        .hero {
            flex-direction: column;
            text-align: center;
        }

        .nav-links {
            display: none;
        }
    }
</style>
</head>

<body>
<?php include 'navbarnova.php'; ?>

<!-- HERO SECTION -->
<section class="hero">

    <div class="hero-text">
        <h1>Timeless Elegance</h1>
        <p>
            Discover NOVA, where every piece of jewellery tells a story of grace and beauty.  
            Designed with love by Jenny, crafted for elegance that lasts forever.
        </p>
        <a href="#" class="hero-btn">Explore Collection</a>
    </div>

    <div class="hero-image">
        <img src="heroimg.webp" 
             alt="Jewellery Image">
    </div>

</section>

<!-- CATEGORY -->
<section class="Categorys">

    <h2>Shope By Category</h2>

    

<div class="container">

<div class="product">
    <img src="rings/ring 1.webp">
    <h3>Diamond Ring</h3>
    <div class="price">$120</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

<div class="product">
    <img src="bracelet/tiffany knot.webp">
    <h3>Luxury Bracelet</h3>
    <div class="price">$200</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>

<div class="product">
    <img src="earrings/elsa peretti.webp">
    <h3>Gold Earrings</h3>
    <div class="price">$90</div>
    <div class="btn" onclick="addToCart()">Add to Cart</div>
</div>


</div>

</section>

<?php include 'footerpage.php'; ?>
</body>
</html>


