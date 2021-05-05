<?php
$servername="localhost";
$username="root";
$password="";
$database_name="entry_details";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
 $sql = mysql_select_db ('test',$conn) or die("unable to connect to database"); 
?>   