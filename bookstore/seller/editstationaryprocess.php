<?php
require '../dbconnect.php';
session_start();
//var_dump($_POST);

$stationary_name=$_POST['stationary_name'];
$stationaryToUpload=$_POST['stationaryToUpload'];
$statioarny_desc=$_POST['statioarny_desc'];
$brand=$_POST['brand'];
$stationary_price=$_POST['stationary_price'];
$stationary_id=$_REQUEST['stationary_id'];

//echo '<pre>';print_r($_POST);exit;
//checks usertype

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

        $sql ="UPDATE `stationary_tbl` SET `stationary_name`='$stationary_name',`stock`='1',`descryption`='$statioarny_desc',`availability`='',`stationary_pic`='$target_file',`price`='$stationary_price',`Brand`='$brand' WHERE stationary_id='$stationary_id'"; 


        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header("location:viewstationary.php");
	    exit();	
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          header("location:viewstationary.php");
          exit();	
        }
