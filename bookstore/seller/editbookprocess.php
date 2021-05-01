<?php
require '../dbconnect.php';
session_start();
//var_dump($_POST);

$book_name=$_POST['book_name'];
$isbn_no=$_POST['isbn_no'];
$book_desc=$_POST['book_desc'];
$publisher=$_POST['publisher'];
$book_price=$_POST['book_price'];


//echo '<pre>';print_r($_POST);exit;
//checks usertype

	$qry="SELECT * FROM book_tbl WHERE book_name='".$book_name."'";
	//echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
	$row=mysqli_fetch_assoc($rs);
	// $_SESSION['user_name']=$row['user_name'];
	//$
	header("location:viewbook.php");
	exit();	
	}
	else
	{
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["bookToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["bookToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        $sql = "UPDATE `book_tbl` SET `book_name`=$book_name,`isbn_no`=$isbn_no,`seller_id`='0',`stock`='1',`descryption`=$book_desc,`availability`='',`book_pic`='$target_file',`price`='$book_price',`publisher`='publisher'";



        $sql2 = "INSERT INTO `book_tbl`( `book_name`, `isbn_no`, `seller_id`, `stock`, `descryption`, `availability`, `book_pic`, `price`, `publisher`) 
        VALUES ('$book_name','$isbn_no','0','1','$book_desc','','$target_file','$book_price','$publisher')";
        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header("location:viewbook.php");
	    exit();	
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          header("location:viewbook.php");
          exit();	
        }
                

	}

