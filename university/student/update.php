<?php include("config.php");
$id=$_REQUEST['id'];
$sql="SELECT * FROM `students` WHERE `id`=$id";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["id"];
        $name=$row["name"];
        $fathername=$row["father_name"];
        $gender=$row["gender"];
        $age=$row["age"];
        $phone=$row["phone"];
        $email=$row["email"];
        $address=$row["address"];
        $program=$row["program"];
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form methode="GET" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>
            <label for="fathername">Father Name:</label><br>
            <input type="text" id="fathername" name="fathername" value="<?php echo $fathername; ?>" required><br>
            <label for="gender">Gender:</label><br>
            <input type="text" id="gender" name="gender" value="<?php echo $gender; ?>"><br>
            <label for="age">Age:</label><br>
            <input type="int" name="age" id="age" value="<?php echo $age; ?>" required><br>
            <label for="phone">Phone_No:</label><br>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>" required><br>
            <label for="program">Degree Program:</label><br>
            <input type="text" name="program" id="program" value="<?php echo $program; ?>" required><br>
            <input type="submit" id="submit" name="submit" value="Update">

        </form>
    </div>
    <?php
    if(isset($_GET["submit"])){
        $id=$_GET['id'];
        $name=$_GET['name'];
        $fathername=$_GET['fathername'];
        $gender=$_GET['gender'];
        $age=$_GET['age'];
        $phone=$_GET['phone'];
        $email=$_GET['email'];
        $address=$_GET['address'];
        $program=$_GET['program'];
        $sql="UPDATE `students` set `name`='$name',`father_name`='$fathername',`age`='$age',`email`='$email',`phone`='$phone',`address`='$address',`program`='$program' WHERE `id`=$id";
        $result=$conn->query($sql);
        if($result==TRUE){
            echo "Data Updated Successfully!";
            header("location:view.php");
        }

        } $conn->close();
    ?>



</body>
</html>