<?php 
    require 'dbconnect.php';
    session_start();

    // if(!isset($_SESSION['id']))
    // {
    //     header("location:login.php?card=5");
    // }
    
    $stationary_id=$_REQUEST['stationary_id'];
    // echo $stationary_id;

    $qry="SELECT * FROM stationary_tbl WHERE stationary_id=$stationary_id";
    $rs=mysqli_query($conn,$qry);
    $row=mysqli_fetch_assoc($rs);


    $stationary_id=$row['stationary_id'];
    $book_name=$row['stationary_name'];
    $price=$row['price'];
    $user_name=$_SESSION['user_name'];
    if($user_name=='')
    {
        header("location:login.php?stationary_id=$stationary_id");
        exit();
    }
    $date=date("Y-m-d");
    $payment_type='COD';

    $qry2="INSERT INTO `cart_tbl`(`user_name`, `cart_id`, `item1`, `item2`, `item3`, `item4`, `item5`, `total_price`, `address`, `payment_type`, `date`) VALUES ('$user_name','','$stationary_id','','','','','$price','','$payment_type','$date')";


	$rs2=mysqli_query($conn,$qry2);
    if($qry2)
    {
        echo "Stationary Successfully purchased";
    
    ?>
    <script>
    function myFunction2() {
        alert("Stationary Succesfully purchased");
        }

    </script>
    <?php
        header("location:Stationary.php");
    }
     
     
	// if($rs2) 
	// {
    //     if($cart_id==1)
    //     {
            
    //        header("location:shop.php?id=$pid");
    //     }
    //     else if($cart_id==2)
    //     {
    //         header("location:shopnew.php?id=$pid");
    //     }
    //     else if($cart_id==3)
    //     {
    //         header("location:shop-single.php?id=$pid");
    //     }
    //     else if($cart_id==4)
    //     {
    //         header("location:cart.php");
    //     }
    //     else if($cart_id==5)
    //     {
    //         header("location:index.php?id=$pid");
    //     }
	// 	//header("location:cart.php");
	// 	echo "Product successfully added to cart";
	// }
	else
	{
		//header("location:shop-single.php");
		echo "Error in insertion";
	}
?> 
