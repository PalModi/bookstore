<?php
require '../dbconnect.php';
$stationary_id=$_REQUEST['stationary_id'];
//echo $id;
//echo "<br><br>";


$qry1="DELETE FROM `stationary_tbl` WHERE stationary_id=$stationary_id";
//echo $qry1;
//echo "<br><br>";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Stationary Deleted";
	header("location: viewstationary.php");
	exit();
}
else
{
	echo "Error in deletion";
}
?>