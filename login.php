<!DOCTYPE html>

<?php 
session_start();
session_destroy();
session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RS CALCULATOR</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte.min.css">
</head>

<body class=" login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index2.html"><b>RS</b>CALCULATOR</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php 
                    isset($_REQUEST['controller'])?$controller=$_REQUEST['controller']:$controller="User";
                    isset($_REQUEST['action'])?$action=$_REQUEST['action']:$action="prepareLogin";
                    include "controllers/controller$controller.php";
                ?>
            </div>
        </div>
    </div>

<!-- jQuery -->
<script src="jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte.min.js"></script>
</body>
</html>
