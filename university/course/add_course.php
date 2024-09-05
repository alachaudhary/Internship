<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Course</title>
</head>
<body>
<div style= " width: 15%; padding: 7px; margin: auto; background-color:skyblue">
<?php
 echo "<h1>Enter Course Details</h1>";
 ?>
    <form method="POST" action="course_crud.php">
        <div class="form-group">
        <label for="course_name">Course Name</label><br>
        <input type="text" name="course_name" id="course_name" ><br></div>
        <div class="form-group">
        <label for="course_duration">Course Duration</label><br>
        <input type="text" name="course_duration" id="course_duration" ><br><br></div>
        <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add" value="Add Course"></div>
    </form></div>
</body>
</html>
