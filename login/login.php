
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User</title>
</head>
<body>
    <div class="container" style="  background-color: skyblue; width: 300px; border-radius:25px; padding: 50px; margin: 10% 500px;">
        <h2 style="text-align:center">User Account</h2><br>
        <form method="GET" action="validation.php" >
            <div class="form-group">
            <label for="email">Email:</label><br>
            <input style="width: 200px;" type="email" id="email" name="email" placeholder="Enter Your Email"  required><br></div>
            <div class="form-group">
            <label for="password">Password:</label><br>
            <input style="width: 200px;" type="password" name="password" id="password" placeholder="Enter Your Password" required><br></div><br>
            <input style="width: 200px;" type="submit" class="btn btn-primary" id="login" name="login" value="Login"><br>
            <small class="form-text text-muted">Don't have an account?<a href="signup.php">SignUp</a></small>

        </form>
    </div>




</body>
</html>