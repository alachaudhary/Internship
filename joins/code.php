<?php
echo "<h1>Inner Join</h1>";
$conn=mysqli_connect("localhost","ala","ala123","university");
$sql="SELECT * FROM course INNER JOIN section ON course.course_id=section.section_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    echo"      ".$row["course_id"]."      ".$row["course_name"]."      ".$row["section_id"]."     ".$row["teacher_id"]."<br>";
}

echo "<h1>Left Join</h1>";
$sql1="SELECT * FROM course LEFT JOIN section ON course.course_id=section.section_id";
$result1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($result1)){
    echo"      ".$row["course_id"]."      ".$row["course_name"]."      ".$row["section_id"]."     ".$row["teacher_id"]."<br>";
}

echo "<h1>Right Join</h1>";
$sql2="SELECT * FROM course RIGHT JOIN section ON course.course_id=section.section_id";
$result2=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($result2)){
    echo"      ".$row["course_id"]."      ".$row["course_name"]."      ".$row["section_id"]."     ".$row["teacher_id"]."<br>";
}

echo "<h1>Self Join</h1>";
$sql3="SELECT * FROM course,section WHERE course.course_id=section.section_id";
$result3=mysqli_query($conn,$sql3);
while($row=mysqli_fetch_array($result3)){
    echo"      ".$row["course_id"]."      ".$row["course_name"]."      ".$row["section_id"]."     ".$row["teacher_id"]."<br>";
}

echo "<h1>UNION</h1>";
$sql4="SELECT course_id FROM course UNION SELECT course_id FROM section";
$result4=mysqli_query($conn,$sql4);
while($row=mysqli_fetch_array($result4)){
    echo"      ".$row["course_id"]."<br>";
}
$conn->close();
?>