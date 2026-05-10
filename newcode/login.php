<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include 'navbarnova.php'; ?>

<div class="container d-flex align-items-center justify-content-center"  style="min-height: calc(100vh - 80px);">
    <div class="card">
        <h2>Welcome Back</h2>

        <form method="POST">

            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <button name="login">Login</button>

            <p class="extra">Don't have an account? <a href="signup.php">Sign Up</a></p>

        </form>
    </div>
</div>

</body>
</html>
<?php
include "db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users_info WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            echo "Login successful! Welcome " . $user['username'];
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "User not found!";
    }
}
?>