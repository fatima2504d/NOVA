<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">
</head>
<body>


    


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
</body>
</html>

 


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

