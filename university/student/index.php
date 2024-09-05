<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Student Form</title>
</head>
<body>
    <div class="container">
        <form methode="GET" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" required><br>
            <label for="fathername">Father Name:</label><br>
            <input type="text" id="fathername" name="fathername" placeholder="Enter Your Father Name" required><br>
            <label for="gender">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <label for="age">Age:</label><br>
            <input type="int" name="age" id="age" placeholder="Age in numbers" required><br>
            <label for="phone">Phone_No:</label><br>
            <input type="text" id="phone" name="phone" placeholder="Enter your Phone Number" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"  required><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br>
            <label for="program">Degree Program:</label><br>
            <input type="text" name="program" id="program" required><br><br>
            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit">

        </form>
    </div>
    <?php
    include("config.php");
    if(isset($_GET["submit"])){
        $name=$_GET['name'];
        $fathername=$_GET['fathername'];
        $gender=$_GET['gender'];
        $age=$_GET['age'];
        $phone=$_GET['phone'];
        $email=$_GET['email'];
        $address=$_GET['address'];
        $program=$_GET['program'];
        $sql="INSERT INTO `students` (`name`,`father_name`,`gender`,`age`,`email`,`phone`,`address`,`program`) VALUES (' $name','$fathername','$gender','$age','$email','$phone','$address','$program')";
        $result=$conn->query($sql);
        if($result==TRUE){
            echo "Data Submitted Successful!";
            header("location:view.php");
        }
        } $conn->close();
    ?>



</body>
</html>