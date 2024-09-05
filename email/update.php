<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Update Form</title>
</head>
<body>
<?php 
    include "config.php";
    $id = $_REQUEST['id'];
    echo $id;  
    $sql = "SELECT * FROM `users` WHERE `id`=$id";    
    $result = $conn->query($sql);     
    if ($result->num_rows > 0) {                
        while ($row = $result->fetch_assoc()) 
        {            
            $name = $row['name'];                    
            $email = $row['email'];            
            $password  = $row['password'];                       
                   
        }    
    }
?> 

<div style= " width: 15%; padding: 7px; margin: auto; background-color:skyblue">
<form action="" methode="Get">     
            <h2>User Update Form</h2>
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" readonly> 
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" required><br><br>
            <input class="btn btn-primary" type="submit" name="Update" value="Update"><br>   
            </form> </div>

</body>
</html>
<?php  
if(isset($_GET['Update'])) {   
    $id = $_GET['id'];        
    $name = $_GET['name'];        
    $email = $_GET['email'];              
    $password = $_GET['password'];   
    $password=md5($password);             
    $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`=$id";         
    $result = $conn->query($sql);         
    if ($result == TRUE) {            
        echo "Record updated successfully.";  
        header("location:view.php");
    }
    else{           
         echo "Error:" . $sql . "<br>" . $conn->error;        
        }    
$conn->close(); }  
?>    

