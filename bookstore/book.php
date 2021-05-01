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
            $qry="SELECT * FROM book_tbl";
            $rs=mysqli_query($conn,$qry); 
            if(mysqli_num_rows($rs)>0)
            {
                while($row=mysqli_fetch_assoc($rs))
                {
        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            
                                                            

                        <div class="card" style="width: 18rem;">
                                 <!-- <img class="card-img-top" src="images/banner1.jpg" alt="Card image cap"> -->
                                 <a href="shopbook.php?id=<?php echo $row['id'];?>"><img class="card-img-top" src="<?php echo $row['book_pic'];?>" alt="<?php echo $row['book_name']; ?>"></a> 

                                 <div class="card-body">
                                   <h5 class="card-title"><?php echo $row['book_name'];?></h5>
                                   <p class="card-text"><?php echo $row['descryption'];?></p>
                                 </div>
                                 
                                 <div class="card-body">
                                   <p>Rs. <?php echo $row['price'];?> </p>
                                 </div>
                                 
                                   </div>



                            <!-- <div class="new_pro_box">

                                <div class="new_pro_img">
                                    <a href="shop-single.php?id=<?php echo $row['book_id']; ?>">
                                        <img src="admin/<?php echo $row['book_pic'];?>" height="230" width="360"> 
                                    </a>
                                </div>    
                                <div class="new_pro_data">
                                    <h3><a href="shop-single.php?id=<?php echo $row['book_id']; ?>"><?php echo $row['book_name']?></a></h3>
                                    <p style="height: 130px;"><?php echo $row['descryption']?></p>
                                    <span class="pro_price">Rs. <?php echo $row['price']?></span>
                                    
                                    <span class="cart_icon"><a href="addtocart.php?ct=2&id="><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                 
                       
                                </div>
                            </div> -->
                            
                        </div>

                        <?php
                                                }
                                            }

                                                ?>
    </div>
</div>
    </body>
</html>