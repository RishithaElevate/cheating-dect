<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
    exit;
}

include "../databaseconnect.php";

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db, "SELECT email FROM students WHERE email = '$user_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['email'];
?>
