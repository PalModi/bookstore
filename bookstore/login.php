<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['fn']))
    {
        header("location:index.php");
    }
    if(isset($_COOKIE['user_name']))
    {
        $un=$_COOKIE['user_name'];
        $ps=$_COOKIE['password'];
    }
    else
    {
        $un="";
        $ps="";
    }
    // if(isset($_REQUEST['stationary_id']))
    // {
    //     echo "stationary";
    // }
    // elseif(isset($_REQUEST['book_id']))
    // {
    //     echo "book";
    // }

?>

<html>
    <head>
        <title>
            Login
        </title>
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
            <div class="col-6">

                 <!-- <h1>Login Form</h1> -->
                 <div class="card">
                          <div class="card-body">
                              <h3 class="card-title mb-3">Login here</h3>
                              <?php
                              if(isset($_REQUEST['stationary_id']))
                               {
                                    $stationary_id=$_REQUEST['stationary_id'];
                                   ?>
                              <form action="check.php?stationary_id='$stationary_id'" method="POST">
                              <?php
                               }
                               elseif(isset($_REQUEST['book_id']))
                                    {
                                        $book_id=$_REQUEST['book_id'];
                                        ?>
                                        <form action="check.php?book_id='$book_id'" method="POST">
                                        <?php
                               }
                               else
                                    {
                                        ?>
                                        <form action="check.php" method="POST">
                                        <?php
                                    }
                                        ?>
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="user_name" class="form-control"  placeholder="Name">
                                    <div class="invalid-feedback">
                                        Please enter username First
                                    </div>
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <div class="invalid-feedback">
                                        Please enter password 
                                    </div>
                                  </div>
                                  
                                  <div class="col-12">
                                    <button type="submit" name="btn_sb" class="btn btn-primary">Login</button>
                                  </div>

                              </form>
                              
                          </div>
                      </div>
            </div>
            <div class="col-6">
                <img src="images/login.jpg" alt="" width="100%" height="80%" /> 
            </div>
        </div>
    <?php
        // echo $id;
?>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>