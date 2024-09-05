<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Section</title>
</head>
<body>
<div style= " width: 15%; padding: 7px; margin: auto; background-color:skyblue">
<?php
 echo "<h1>Enter Section Details</h1>";
 $id=$_REQUEST['id'];
 ?>
    <form method="POST" action="section_crud.php">
        <input type="hidden" name="course_id" value=<?php echo $id; ?> ><br>
        <div class="form-group">
        <label for="teacher_id">Teacher ID</label><br>
        <input type="text" name="teacher_id" id="teacher_id" ><br></div>
        <div class="form-group">
        <label for="section_strength">No. of Enrolled Students</label><br>
        <input type="text" name="section_strength" id="section_strength" ><br><br></div>
        <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add_section" value="Add Section"></div>
    </form></div>
</body>
</html>
