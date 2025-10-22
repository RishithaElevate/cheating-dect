<?php
$db = mysqli_connect("localhost", "root", "", "sambhav");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
