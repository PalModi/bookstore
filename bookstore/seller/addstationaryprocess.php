<?php
require '../dbconnect.php';
session_start();
//var_dump($_POST);

$stationary_name=$_POST['stationary_name'];
// $stationaryToUpload=$_POST['stationaryToUpload'];
// echo "$stationaryToUpload";
$statioarny_desc=$_POST['statioarny_desc'];
$brand=$_POST['brand'];
$stationary_price=$_POST['stationary_price'];


//echo '<pre>';print_r($_POST);exit;
//checks usertype

	$qry="SELECT * FROM stationary_tbl WHERE stationary_name='".$stationary_name."'";
	//echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
	$row=mysqli_fetch_assoc($rs);
  
	// $_SESSION['user_name']=$row['user_name'];
	//$
	header("location:viewstationary.php");
	exit();	
	}
	else
	{
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["stationaryToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["stationaryToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        $sql = "INSERT INTO `stationary_tbl`(`stationary_name`, `seller_id`, `stock`, `descryption`, `availability`, `stationary_pic`, `price`, `Brand`) 
        VALUES ('$stationary_name','1','1','$statioarny_desc','','$target_file','$stationary_price','$brand')";
        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header("location:viewstationary.php");
	    exit();	
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          header("location:viewstationary.php");
          exit();	
        }
                

	}

