<?php include("config.php");
$sql="SELECT * FROM `students`";
$result=$conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body class="container">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Phone</th>
            <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['father_name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><button class="btn btn-info"><a style="color:white" href="expand.php?id='<?php echo $row['id']?>'">View</a></button>
                <button class="btn btn-primary"><a style="color:white" href="update.php?id='<?php echo $row['id']?>'">Update</a></button>
                <button class="btn btn-danger"><a style="color:white" href="delete.php?id='<?php echo $row['id']?>'">Delete</a></button></td>
            </tr><?php }?>
        </tbody>            
                
    </table>
</body>
</html>