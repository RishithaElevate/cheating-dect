<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$folder = "../images/";
$images = glob($folder . "*.{jpg,jpeg,png}", GLOB_BRACE);

echo "<h2>Detection Output</h2>";
foreach ($images as $img) {
    echo "<div style='display:inline-block;margin:10px;'>
            <img src='$img' width='200'><br>
            <small>" . basename($img) . "</small>
          </div>";
}
?>
