<?php
require 'dbconnect.php';
var_dump($_POST);
//echo '<pre>';print_r($_POST);exit;
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$uname=$_POST['user_name'];
$cty=$_POST['city'];
$email=$_POST['email'];
$mob=$_POST['phone'];
$pass=$_POST['password'];
$usertype=1;

$qry="INSERT INTO user_tbl(user_name,f_name,l_name,email,m_no,city,user_type,password)VALUES('".$uname."','".$fn."','".$ln."','".$email."','".$mob."','".$cty."','".$usertype."','".$pass."')";
echo $qry;
$rs=mysqli_query($conn,$qry);

// $qry2="INSERT INTO 'seller_tbl'('user_name', 'f_name', 'l_name', 'email, 'm_no', 'city', , 'password')VALUES('".$uname."','".$fn."','".$ln."','".$email."','".$mob."','".$cty."','".$pass."')";
// echo $qry2;
// $rs2=mysqli_query($conn,$qry2);
if($rs )
{
	echo"insert complete";
	header("location:login.php");
}
else
{
	echo "error";
}
?>
