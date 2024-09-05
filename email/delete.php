<?php 
include("config.php");
$id=$_REQUEST["id"];
$sql="Delete from `users` WHERE id=$id";
$result=$conn->query($sql);
if ($result == TRUE)
{        
    header('location: view.php');
}
$conn->close();
?>