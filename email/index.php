<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Email</title>
</head>
<body>
<form methode="GET" action="">
<div style= " width: 15%; padding: 7px; margin: auto; background-color:skyblue">
<?php
include "config.php";
 echo "<h1>Enter Your Information</h1>";
 ?>
 <div class="form-group">
 <label for="name">Name:</label><br>
 <input type="text" id="name" name="name" required><br></div>
 <div class="form-group">
 <label for="email">Email:</label><br>
 <input type="text" id="email" name="email"  required><br></div>
 <div class="form-group">
 <label for="password">Password:</label><br>
 <input type="password" id="password" name="password" required><br><br>
</div>
<div>
 <input class="btn btn-primary" type="submit" name="submit" value="Submit"><br>
 </div>
</div>
 </form>
 <?php
    
    if(isset($_GET["submit"])){
    $email=$_GET["email"];
    $password=$_GET["password"];
    $name=$_GET["name"];
    $password=md5($password);
    $sql="INSERT INTO `users` (`email`,`password`,`name`) VALUES ('$email' , '$password','$name')";
    $result=$conn->query($sql);
    if ($result == TRUE)
    {      
        echo "New record created successfully.";   
        header('location: view.php');
    }
    else
    {      
        echo "Error:". $sql . "<br>". $conn->error;    
    }     $conn->close();   
  }  ?>
</body>
</html>
