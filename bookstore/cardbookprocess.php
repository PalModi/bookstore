<?php 
    require 'dbconnect.php';
    session_start();

    // if(!isset($_SESSION['id']))
    // {
    //     header("location:login.php?card=5");
    // }
    
    $book_id=$_GET['book_id'];
    // echo $book_id;

    $qry="SELECT * FROM book_tbl WHERE book_id=$book_id";
    $rs=mysqli_query($conn,$qry);
    $row=mysqli_fetch_assoc($rs);


    $book_id=$row['book_id'];
    $book_name=$row['book_name'];
    $price=$row['price'];
    $user_name=$_SESSION['user_name'];
    if($user_name=='')
    {
        header("location:login.php?book_id=$book_id");
        exit();
    }
    $date=date("Y-m-d");
    $payment_type='COD';

    $qry2="INSERT INTO `cart_tbl`(`user_name`, `cart_id`, `item1`, `item2`, `item3`, `item4`, `item5`, `total_price`, `address`, `payment_type`, `date`) VALUES ('$user_name','','$book_id','','','','','$price','','$payment_type','$date')";


	$rs2=mysqli_query($conn,$qry2);
    if($qry2)
    {
        echo "Book Successfully purchased";
    
    ?>
    <script>
    function myFunction() {
        alert("Book Succesfully purchased");
        }

    </script>
    <?php
        header("location:book.php");
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
