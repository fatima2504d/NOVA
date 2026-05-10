<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        margin: 50px auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-box {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .contact-info, .contact-form {
        flex: 1;
        min-width: 280px;
    }

    .contact-info p {
        margin: 10px 0;
        color: #555;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .contact-form button {
        width: 100%;
        padding: 10px;
        border: none;
        background: #222;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .contact-form button:hover {
        background: #eedfc5;
    }

    .success {
        color: green;
        text-align: center;
        display: none;
    }

    @media(max-width: 768px) {
        .contact-box {
            flex-direction: column;
        }
    }
</style>
</head>

<body>
<?php include 'navbarnova.php'; ?>
<div class="container">
    <h2>Contact Us</h2>

    <div class="contact-box">
        
        <!-- Contact Info -->
        <div class="contact-info">
            <h3>Get in Touch</h3>
            <p>Email: example@email.com</p>
            <p>Phone: +92 300 1234567</p>
            <p>Address: Karachi, Pakistan</p>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <form onsubmit="return validateForm()">
                <input type="text" id="name" placeholder="Your Name">
                <input type="email" id="email" placeholder="Your Email">
                <textarea id="message" rows="5" placeholder="Your Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
            <p class="success" id="successMsg">Message sent successfully!</p>
        </div>

    </div>
</div>

<script>
function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();

    if(name === "" || email === "" || message === "") {
        alert("Please fill all fields!");
        return false;
    }

    document.getElementById("successMsg").style.display = "block";
    return false; // prevent actual submit (demo only)
}
</script>
<?php include 'footerpage.php'; ?>
</body>
</html>
