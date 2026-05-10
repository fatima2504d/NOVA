<!-- Google Font (thin & elegant) -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<style>
    body {
        margin: 0;
        background: #ffffff;
        font-family: 'Poppins', sans-serif;
    }

    /* Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 50px;
        background: #eedfc5; /* cream */
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        position: sticky;
        top: 0;
    }

    /* Logo */
    .logo {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        letter-spacing: 2px;
        color: #444;
    }

    /* Nav links */
    .nav-links {
        display: flex;
        list-style: none;
        gap: 35px;
    }

    .nav-links a {
        text-decoration: none;
        color: #555;
        font-weight: 300;
        font-size: 15px;
        position: relative;
        transition: 0.3s;
    }

    /* Soft underline animation */
    .nav-links a::after {
        content: "";
        position: absolute;
        width: 0%;
        height: 1px;
        bottom: -4px;
        left: 0;
        background: #c8a97e; /* soft gold */
        transition: 0.3s;
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .nav-links a:hover {
        color: #c8a97e;
    }

    /* Right button */
    .btn {
        padding: 6px 16px;
        border: 1px solid #c8a97e;
        border-radius: 20px;
        text-decoration: none;
        color: #c8a97e;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn:hover {
        background: #c8a97e;
        color: white;
    }

    /* Mobile */
    .menu-toggle {
        display: none;
        font-size: 22px;
        cursor: pointer;
        color: #555;
    }

    @media(max-width: 768px) {
        .nav-links {
            position: absolute;
            top: 70px;
            right: 0;
            background: #f8f5f0;
            flex-direction: column;
            width: 200px;
            padding: 20px;
            display: none;
        }

        .nav-links.active {
            display: flex;
        }

        .menu-toggle {
            display: block;
        }
    }
</style>

<nav class="navbar">
    <div class="logo">NOVA</div>

    <ul class="nav-links" id="navLinks">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="#">Collections</a></li>
        <li><a href="aboutpage.php">About</a></li>
        <li><a href="contactpage.php">Contact</a></li>
    </ul>
    <div>
        <a href="login.php" class="btn">LOGIN</a>
        <a href="#" class="btn">BUY NOW</a>
    </div>
    

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
</nav>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("active");
}
</script>
