<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User</title>
    <style>

        .container {
            background-color: #b3ecff;
            width: 350px;
            height: 500px;
            border-radius: 25px;
            padding: 50px;
            margin: 50px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2 style="text-align:center">Complete Info</h2><br>
        <form method="GET" action="" style="width: 250px;">
            <input type="hidden" id="name" name="name" value="<?php echo $_POST['name']; ?>">
            <input type="hidden" id="email" name="email" value="<?php echo $_POST['email']; ?>">
            <input type="hidden" name="password" id="password" value="<?php echo $_POST['password']; ?>">

            <div class="form-group">
                <label for="phone">Phone No:</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone No." required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City" required>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" class="form-control" placeholder="Enter Your Country" required>
            </div>
 
            <label for="role">Role:</label>
            <select id="role" name="role" class="form-select">
             <option value="Admin">Admin</option>
             <option value="User">User</option>
            </select><br><br>
            <input style="width: 250px;" type="submit" class="btn btn-primary" id="signup" name="signup" value="Sign Up">
        </form>
    </div>

    <?php 
    include("config.php");
    if (isset($_GET["signup"])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $password = password_hash($password, PASSWORD_BCRYPT);
        $phone = $_GET['phone'];
        $address = $_GET['address'];
        $city = $_GET['city'];
        $country = $_GET['country'];
        $role = $_GET['role'];

        $sql = "INSERT INTO `users` (`name`,`email`,`password`,`phone`,`address`,`city`,`country`,`role`) 
                VALUES ('$name','$email','$password','$phone','$address','$city','$country','$role')";
        
        $result = $conn->query($sql);
        if ($result == TRUE) {
            header("location:login.php");
        }
    } 
    $conn->close();
    ?>
</body>
</html>
