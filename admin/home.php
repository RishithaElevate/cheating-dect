<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Chart JS -->
    <script src="./js/charts.js"></script>

    <style>
      .card {
        overflow: visible;
      }
      .profile-pic {
        margin-top: 0em;
        z-index: 1;
        position: relative;
      }
      .profile-pic > img {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      }
      .controls {
        cursor: pointer;
      }
    </style>
</head>
<body>

<?php include 'header.html'; ?>
<?php include 'databaseconnect.php'; ?>

<div class="container">
    <h4>Welcome to Pariksha Dashboard</h4>
    <p>Charts will appear below once data is loaded.</p>

    <div class="row">
        <div class="col s6">
            <div id="onoffContainer" style="height: 300px; width: 100%; background-color: #f2f2f2;"></div>
        </div>
        <div class="col s6">
            <div id="passfailContainer" style="height: 300px; width: 100%; background-color: #f2f2f2;"></div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div id="chartContainer" style="height: 300px; width: 100%; background-color: #f2f2f2;"></div>
        </div>
    </div>
</div>

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>

<!-- CanvasJS Charts -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>
