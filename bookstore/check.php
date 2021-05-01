<?php
require 'dbconnect.php';
session_start();
//var_dump($_POST);

$un=$_POST['user_name'];
$ps=$_POST['password'];
//echo '<pre>';print_r($_POST);exit;
//checks usertype

	$qry="SELECT * FROM user_tbl WHERE  user_name='".$un."' AND password='".$ps."'";
	$rs=mysqli_query($conn,$qry);

	$qry2="SELECT * FROM user_tbl WHERE  user_name='".$un."' AND password='".$ps."' AND user_type='1'";
	$rs2=mysqli_query($conn,$qry2);

	$qry3="SELECT * FROM user_tbl WHERE  user_name='".$un."' AND password='".$ps."'AND user_type='0'";
	$rs3=mysqli_query($conn,$qry3);

	if(mysqli_num_rows($rs3)>0)
	{
		$row=mysqli_fetch_assoc($rs3);
		$_SESSION['user_name']=$row['user_name'];
		header("location:admin/index.php");
		exit();	
	}
	elseif(mysqli_num_rows($rs2)>0)
	{
		$row=mysqli_fetch_assoc($rs2);
		$_SESSION['user_name']=$row['user_name'];
		header("location:seller/index.php");
		exit();	
	}
	elseif(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$_SESSION['user_name']=$row['user_name'];
		header("location:index.php");
		exit();	
	}
	else
	{
		echo "invalid login";
		

	}

