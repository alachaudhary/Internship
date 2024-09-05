<?php 
$conn= mysqli_connect("localhost","ala","ala123","university");
if(!$conn){
    die("Connection Failed!". mysqli_connect_error());
}