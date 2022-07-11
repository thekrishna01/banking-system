<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM user where id=$id";
$res = mysqli_query($conn,$sql);
if($res){
    header('Location: removeuser.php');
}else{
    echo "Error deleting".$conn->error;
}
$conn->close();
?>
