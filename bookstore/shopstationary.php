<!DOCTYPE html>
<?php
    require 'dbconnect.php';
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

    <body  id="main_bg">
    <?php 
        require 'header.php'; 
        $stationary_id=$_REQUEST['stationary_id'];
    ?>
    <div class="container">
        <div class="row">
                 <div class="col-6" style="height: 580px;">
                    <img src="images/login.jpg" alt="" width="100%" height="80%" /> 
                </div>
                 <div class="col-6">

                 <!-- <h1>Login Form</h1> -->
                 <div class="card" style="height: 465px;">


                     <!-- <div class="card" style="width: 18rem;"> -->
                     <?php
                        $qry="SELECT * FROM stationary_tbl WHERE stationary_id='$stationary_id'";
                        $rs=mysqli_query($conn,$qry);
                        
                        if (mysqli_num_rows($rs)>0) 
                         {
                            $row=mysqli_fetch_assoc($rs);
                            $qry2="SELECT seller_id FROM stationary_tbl WHERE stationary_id='$stationary_id'";
                            $rs2=mysqli_query($conn,$qry2);
                            $row2=mysqli_fetch_assoc($rs2);
                            $seller_id=$row2['seller_id'];;
                            $qry3="SELECT * FROM seller_tbl WHERE seller_id='$seller_id'";
                            $rs3=mysqli_query($conn,$qry3);
                            $row3=mysqli_fetch_assoc($rs3);
                         }
                        
                        ?> 
                                

                          <div class="card-body">
                            <h3 class="card-title"><?php echo $row['stationary_name'];?></h3>
                            <h5 class="card-text"> By <?php echo $row3['f_name']; echo ' '; echo $row3['l_name']?></h5> 
                            <p class="card-text"><?php echo $row['descryption'];?></p>
                          </div>
                          
                          <div class="card-body">
                            <p>Rs. <?php echo $row['price'];?> </p>
                          </div>


                          <?php
                          if(isset($_SESSION['user_name']))
                          {

                            ?>
                          <a class="btn btn-primary" href="cardstationaryprocess.php?stationary_id=<?php echo $row['stationary_id'];?>" onclick="myFunction()">Buy Now</a>
                           <!-- <a class="btn btn-primary" href="cart.php?book_id=<?php echo $row['book_id'];?>" role="button">View Cart</a> -->
                          
                          <?php
                          }
                          else
                          {
                            ?>
                          <a class="btn btn-primary" href="cardstationaryprocess.php?stationary_id=<?php echo $row['stationary_id'];?>" onclick="errorFunction()">Buy Now</a>
                          <?php
                          }
                          ?>
                          <!-- <a class="btn btn-primary" href="cart.php?book_id=<?php echo $row['book_id'];?>" role="button">View Cart</a> -->

                            </div>
                      </div>
                </div>
        </div>
    </div>
    <script>
    function myFunction() {
    alert("Product Succesfully purchased");
      }
    </script>
    <script>
       function errorFunction() {
       alert("Login first");
            }
</script>
    </body>
</html>