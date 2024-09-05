<?php include("config.php");
$id=$_REQUEST['id'];
$sql="DELETE FROM `students` WHERE `id`=$id";
$result=$conn->query( $sql );
if($result==True)
{
    header("location:view.php");
}
$conn->close();
?>