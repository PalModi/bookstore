<?php
require '../dbconnect.php';
session_start();
//var_dump($_POST);

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$user_name=$_POST['user_name'];
$city=$_POST['city'];
$m_no=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];


	$qry="SELECT * FROM book_tbl WHERE book_name='".$book_name."'";
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
	$row=mysqli_fetch_assoc($rs);
	header("location:profile.php");
	exit();	
	}
	else
	{
       

        $sql = "UPDATE `user_tbl` SET `f_name`='$f_name',`l_name`='$l_name',`email`='$email',`m_no`='$m_no',`gender`='',`city`='$city',`user_type`='1',`password`='$password' WHERE user_name='$user_name'";



        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header("location:profile.php");
	    exit();	
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        //   header("location:profile.php");
          exit();	
        }
                

	}

