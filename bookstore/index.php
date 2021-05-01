<!DOCTYPE html>
<?php
    session_start();
?>

<html>
    <head>
        <title>Student Stack</title>
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
    <div class="container-fluid">
         <div>
              <?php
             require "dbconnect.php";
//              $uname = (isset($_SESSION["user_name"])) ? $_SESSION["user_name"] : '';
// if($uname!='')
// {
//     $qry="SELECT * FROM user_tbl WHERE  user_name='".$uname."'";
//     //echo $qry;
//     $rs=mysqli_query($conn,$qry);
//     $row=mysqli_fetch_assoc($rs);
//     $name=$row['f_name'];
//     echo "welcome    $name";
// }           
       
//               ?>
</div>
        <img src="images/banner1.jpg" alt="" width=100% height=auto />

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>