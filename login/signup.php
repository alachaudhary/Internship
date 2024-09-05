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
<div class="container" style="  background-color: #b3ecff; width: 350px; border-radius:25px; padding: 50px; margin:50px auto;">
        <h1 style="text-align:center">Create Account</h1><br>
        <form method="POST" action="create.php">
            <div class="form-group">
            <label for="name">Name:</label><br>
            <input style="width: 250px;" type="text" id="name" name="name" placeholder="Enter Your Name" required><br></div>
            <div class="form-group">
            <label for="email">Email:</label><br>
            <input style="width: 250px;" type="email" id="email" name="email" placeholder="Enter Your Email"  required><br></div>
            <div class="form-group">
            <label for="password">Password:</label><br>
            <input style="width: 250px;" type="password" name="password" id="password" placeholder="Enter Your Password" required><br></div>
            <input style="width: 250px;" type="submit" class="btn btn-primary" value="Next">

        </form>
    </div>




</body>
</html>