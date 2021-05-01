<?php
require '../dbconnect.php';
$book_id=$_REQUEST['book_id'];
//echo $id;
//echo "<br><br>";


$qry1="DELETE FROM `book_tbl` WHERE book_id=$book_id";
//echo $qry1;
//echo "<br><br>";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Book Deleted";
	header("location: viewbook.php");
	exit();
}
else
{
	echo "Error in deletion";
}
?>