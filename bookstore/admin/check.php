<?php
require '../dbconnect.php';
session_start();
//var_dump($_POST);

$un=$_POST['user_name'];
$ps=$_POST['password'];
//echo '<pre>';print_r($_POST);exit;
//checks usertype

	$qry="SELECT * FROM user_tbl WHERE  user_name='".$un."' AND password='".$ps."' And user_type='0'";
	//echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
	$row=mysqli_fetch_assoc($rs);
	$_SESSION['user_name']=$row['user_name'];
	//$
	header("location:index.php");
	exit();	
	}
	else
	{
		echo "invalid login";
		

	}

