<?php
require '../dbconnect.php';
$user_name=$_REQUEST['user_name'];
//echo $id;
//echo "<br><br>";


$qry1="DELETE FROM `user_tbl` WHERE user_name='$user_name'";
//echo $qry1;
//echo "<br><br>";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Book Deleted";
	header("location: viewseller.php");
	exit();
}
else
{
	echo "Error in deletion";
}
?>