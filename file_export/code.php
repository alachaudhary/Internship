<?php
$conn=mysqli_connect("localhost","ala","ala123","import");

if(isset($_POST["export"])){
     
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('ID', 'Name', 'Email'));  
    $query = "SELECT * from user ORDER BY id ASC";  
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);  
} 