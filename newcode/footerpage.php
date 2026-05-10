<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Elegant Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

<title>NOVA Footer</title>

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    /* Footer */
    .footer {
        background: #f1efed; /* soft cream */
        padding: 60px 8% 30px;
        color: #6b6b6b;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 40px;
    }

    /* Brand */
    .footer-brand h2 {
        font-family: 'Playfair Display', serif;
        font-size: 26px;
        letter-spacing: 2px;
        color: #333;
        margin-bottom: 10px;
    }

    .footer-brand p {
        font-weight: 300;
        font-size: 14px;
        line-height: 1.6;
        max-width: 300px;
    }

    /* Links */
    .footer-links h3,
    .footer-contact h3 {
        font-family: 'Playfair Display', serif;
        font-size: 18px;
        margin-bottom: 15px;
        color: #333;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links ul li {
        margin: 8px 0;
    }

    .footer-links ul li a {
        text-decoration: none;
        color: #555;
        font-weight: 300;
        transition: 0.3s;
    }

    .footer-links ul li a:hover {
        color: #c8a97e; /* soft gold */
    }

    /* Contact */
    .footer-contact p {
        font-size: 14px;
        font-weight: 300;
        margin: 6px 0;
    }

    /* Bottom */
    .footer-bottom {
        text-align: center;
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid #eedfc5;
        font-size: 13px;
        font-weight: 300;
    }

    .gold {
        color: #c8a97e;
    }

    /* Responsive */
    @media(max-width: 768px) {
        .footer-container {
            flex-direction: column;
            text-align: center;
        }

        .footer-brand p {
            margin: 0 auto;
        }
    }
</style>
</head>

<body>

<footer class="footer">

    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-brand">
            <h2>NOVA</h2>
            <p>
                Timeless elegance crafted with love by Jenny.  
                NOVA brings you jewellery that tells a story of beauty, grace, and simplicity.
            </p>
        </div>

        <!-- Links -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Collections</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-contact">
            <h3>Contact</h3>
            <p>Email: support@nova.com</p>
            <p>Phone: +92 300 1234567</p>
            <p>Location: Karachi, Pakistan</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 <span class="gold">NOVA</span>. All rights reserved.
    </div>

</footer>

</body>
</html>
