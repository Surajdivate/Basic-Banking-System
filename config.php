<?php 

$server="Localhost";
$username="root";
$password="";
$db="banking";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}
else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>