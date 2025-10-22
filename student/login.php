<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include '../databaseconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM students WHERE email = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($db));
    }

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid login";
    }
}
?>
