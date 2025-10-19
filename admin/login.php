<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../databaseconnect.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM admin WHERE email = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("Location: home.php");
        exit();
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <h4>Admin Login</h4>
        <form method="POST" action="login.php">
            <div class="input-field">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit">Login</button>
        </form>
        <?php if ($error != ""): ?>
            <p style="color:red; margin-top: 20px;"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
?>
