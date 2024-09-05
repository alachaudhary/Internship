<?php include "config.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<button style="margin: 10px" class="btn btn-primary"><a style="color:white; " href="index.php">Add Record</a></button>
   <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)){?>
            <tr>
            <td><?php echo ($row['id']) ?></td>
            <td><?php echo ($row['name']) ?></td>
            <td><?php echo ($row['email']) ?></td>
            <td><?php echo ($row['password']) ?></td>
            <td><button class="btn btn-primary"><a name="update" style="color: white;" href="update.php?id=<?php echo $row['id']; ?>">Update</a></button></td>
            <td><button class="btn btn-danger"><a style="color: white;" href="delete.php?id='<?php echo $row['id']; ?>'" onclick="return confirm('Are you sure you want to Deletet?';)">Delete</a></button></td>
            </tr><?php }?>
      
    </tbody>
  </table>
</div>

</body>
</html>
