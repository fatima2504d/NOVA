<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About NOVA</title>

<!-- Elegant Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        background: #ffffff;
        font-family: 'Poppins', sans-serif;
        color: #444;
    }

    /* Container */
    .about-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 60px 8%;
        gap: 50px;
        background: #faf8f5; /* soft cream-white */
    }

    /* Text Side */
    .about-text {
        flex: 1;
    }

    .about-text h1 {
        font-family: 'Playfair Display', serif;
        font-size: 40px;
        margin-bottom: 20px;
        color: #333;
        letter-spacing: 2px;
    }

    .about-text p {
        font-size: 16px;
        line-height: 1.8;
        font-weight: 300;
        color: #555;
    }

    .brand {
        color: #c8a97e; /* soft gold accent */
        font-weight: 400;
    }

    /* Image Side */
    .about-image {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .about-image img {
        width: 100%;
        max-width: 420px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    /* Responsive */
    @media(max-width: 768px) {
        .about-section {
            flex-direction: column;
            text-align: center;
        }

        .about-image img {
            max-width: 90%;
        }
    }
</style>
</head>

<body>
<?php include 'navbarnova.php'; ?>

<section class="about-section">

    <!-- Left Side Text -->
    <div class="about-text">
        <h1>About <span class="brand">NOVA</span></h1>

        <p>
            NOVA began as a small dream in the heart of its founder, <strong>Jenny</strong>.
            What started as a passion for timeless beauty and delicate craftsmanship
            soon turned into a journey of creating jewellery that tells a story.
            <br><br>
            In the early days, Jenny worked from a small studio, designing each piece
            with care and love. Her vision was simple — to create jewellery that feels
            personal, elegant, and everlasting.
            <br><br>
            Over time, NOVA grew into a brand that represents grace, purity, and modern
            elegance. Every collection reflects the journey of growth, creativity, and
            the belief that beauty lies in simplicity.
        </p>
    </div>

    <!-- Right Side Image -->
    <div class="about-image">
        <img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3?auto=format&fit=crop&w=800&q=80" 
             alt="NOVA Brand Journey">
    </div>

</section>
<?php include 'footerpage.php'; ?>
</body>
</html>
