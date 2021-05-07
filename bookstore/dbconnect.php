<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bookstore";
//create connection
$conn=mysqli_connect($servername,$username,$password);
//check connection
if(!$conn) 
{
	die("connection failed:".mysqli_connect_error());
}
//echo "connected sucesfully";
$db=mysqli_select_db($conn,$dbname);

?>
    <script>
    
    function myFunction() {
         alert("Book Succesfully added").click();    
    }
	function myFunction2() {
        alert("Stationary Succesfully purchased").click();
      }
</script> 