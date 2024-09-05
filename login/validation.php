<?php 
session_start();
include("config.php");

    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

$email=validate($_GET['email']);
$password=validate($_GET['password']);


$sql="SELECT * FROM `users` WHERE `email`='$email' ";
$result=$conn->query($sql);

    $row=$result->fetch_assoc();
    if(password_verify($password, $row["password"])){
        $_SESSION['Email']=$email;
        header("location:home.php");
        exit();
    }
    else{
        header("location:login.php?error=Wrong Email or Password!");
        exit();
    }
 $conn->close();
?>