<?php
$servername="localhost";
$username="root";
$password="";
$dbname="banksql";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("can't able to connect to the database due to the following error".mysqli_connect_error());
} 
?>
