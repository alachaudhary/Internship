<?php
$conn=mysqli_connect("localhost","ala","ala123","import");
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$path=$_FILES['file']['tmp_name'];

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($path);
$data= $spreadsheet->getActiveSheet()->toArray();

foreach($data as $row)
{
    $id=$row[0];
    $name=$row[1];
    $email=$row[2];
    $sql="INSERT INTO `user` (`id`,`name`,`email`) VALUES ('$id','$name','$email')";
    $result=mysqli_query($conn,$sql);
}
?>