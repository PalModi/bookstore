<!DOCTYPE html>
<?php
session_start();
?>

<html>
    <head>
        <title> </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320">
        <link rel="stylesheet" href="css/color.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </head>
    <body id="main_bg">
    <?php 
        require 'header.php'; 
    ?>


    <div class="container">
    <div class="row">
        <div class="col-4">
        <div class="card mb-3 greenyellow " >
            <div class="card-body contacthover">
                <h4 class="card-title center">Email</h4>
                <p class="card-text center">palmodi@gmail.com</p>
                <p class="card-text center">studentstack@gmail.com</p>

            </div>

        </div>
        </div>
        <div class="col-4">

        <div class="card mb-3 greenyellow">
            <div class="card-body contacthover">
                <h4 class="card-title center">Phone</h4>
                <p class="card-text center">+91 9638355713</p>
                <p class="card-text center">+91 971649880</p>

            </div>
            </div>

        </div>
        <div class="col-4">

        <div class="card mb-3 greenyellow">
            <div class="card-body contacthover">
                <h4 class="card-title center">Address</h4>
                <p class="card-text center">LJ Polytechnic</p>
                <p class="card-text center">Ahmedabad</p>

            </div>
            </div>

        </div>
        </div>




        <!-- <div class="row">
            <div class="col-4">
                Hey
            </div>
            <div class="col-4">
                Hey
            </div>
            <div class="col-4">
                Hey
            </div>
        </div> -->
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>