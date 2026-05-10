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

    /* NAVBAR */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 8%;
        background: #f8f5f0;
        position: sticky;
        top: 0;
    }

    .logo {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        letter-spacing: 2px;
    }

    .nav-links {
        display: flex;
        gap: 30px;
        list-style: none;
    }

    .nav-links a {
        text-decoration: none;
        color: #555;
        font-weight: 300;
        transition: 0.3s;
    }

    .nav-links a:hover {
        color: #c8a97e;
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

    /* COLLECTIONS */
    .collections {
        padding: 60px 8%;
        text-align: center;
    }

    .collections h2 {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        margin-bottom: 40px;
    }

    .cards {
        display: flex;
        gap: 25px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card {
        background: #f8f5f0;
        padding: 20px;
        width: 220px;
        border-radius: 10px;
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        width: 100%;
        border-radius: 8px;
    }

    .card h3 {
        font-family: 'Playfair Display', serif;
        margin-top: 10px;
        font-size: 18px;
    }

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
        <img src="https://images.unsplash.com/photo-1601121141461-9d6647bca1ed?auto=format&fit=crop&w=800&q=80" 
             alt="Jewellery Image">
    </div>

</section>

<!-- COLLECTIONS -->
<section class="collections">

    <h2>Our Collections</h2>

    <div class="cards">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1600721391689-2564bb8055de?auto=format&fit=crop&w=800&q=80">
            <h3>Rings</h3>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?auto=format&fit=crop&w=800&q=80">
            <h3>Necklaces</h3>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1611599537845-1c7aca0091c0?auto=format&fit=crop&w=800&q=80">
            <h3>Earrings</h3>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1617038260897-4d8b6c0b7b5d?auto=format&fit=crop&w=800&q=80">
            <h3>Bracelets</h3>
        </div>

    </div>

</section>

<?php include 'footerpage.php'; ?>
</body>
</html>


