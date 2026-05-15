<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    height: 100vh;
    background: linear-gradient(135deg, #fdfcfb, #e2d1c3);
}

/* Glass card */
.card {
    width: 360px;
    padding: 40px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(12px);
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    text-align: center;
}

/* Heading */
.card h2 {
    font-family: 'Playfair Display', serif;
    color: #a67c52;
    margin-bottom: 30px;
    letter-spacing: 1px;
}

/* Input container */
.input-box {
    position: relative;
    margin-bottom: 25px;
}

/* Input */
.input-box input {
    width: 100%;
    padding: 12px;
    border: none;
    border-bottom: 2px solid #ccc;
    background: transparent;
    outline: none;
    font-size: 15px;
    transition: 0.3s;
}

/* Floating label */
.input-box label {
    position: absolute;
    left: 0;
    top: 12px;
    color: #999;
    font-size: 14px;
    pointer-events: none;
    transition: 0.3s;
}

/* Focus effect */
.input-box input:focus,
.input-box input:valid {
    border-bottom: 2px solid #a67c52;
}

/* Label move animation */
.input-box input:focus + label,
.input-box input:valid + label {
    top: -10px;
    font-size: 12px;
    color: #a67c52;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    border: none;
    background: linear-gradient(45deg, #c6a96b, #a67c52);
    color: white;
    font-size: 16px;
    border-radius: 30px;
    cursor: pointer;
    transition: 0.4s;
}

/* Hover effect */
button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(166,124,82,0.4);
}

</style>


<?php include 'navbarnova.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 80px);">
    <div class="card">
        <h2>Create Account</h2>

        <form method="POST">
            <div class="input-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <button name="signup">Sign Up</button>

            <p class="extra">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</div>

 


 <?php
include "db.php";

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users_info (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql)) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>  

