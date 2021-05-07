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

    <body  id="main_bg">
    <?php 
        require 'header.php'; 
    ?>
    <div class="container">
    <div class="row">
            <?php
            require 'dbconnect.php';
            $qry="SELECT * FROM stationary_tbl";
            $rs=mysqli_query($conn,$qry); 
            if(mysqli_num_rows($rs)>0)
            {
                while($row=mysqli_fetch_assoc($rs))
                {
        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            
                        <div class="card" style="width: 18rem;">
                                 <!-- <img class="card-img-top" src="images/banner1.jpg" alt="Card image cap"> -->
                                 <a href="shopstationary.php?stationary_id=<?php echo $row['stationary_id'];?>"><img class="card-img-top" src="<?php echo $row['stationary_pic'];?>" alt="<?php echo $row['stationary_name']; ?>"></a> 
                                         
                                 <div class="card-body">
                                   <h5 class="card-title"><?php echo $row['stationary_name'];?></h5>
                                   <p class="card-text"><?php echo $row['descryption'];?></p>
                                 </div>
                                 
                                 <div class="card-body">
                                   <p>Rs. <?php echo $row['price'];?> </p>
                                 </div>
                                 
                                   </div>
                            
                        </div>

                        <?php
                            }
                         }

                         ?>
    </div>
</div>
    </body>
</html>