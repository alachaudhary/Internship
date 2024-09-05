<?php
session_start();
if (isset($_SESSION["Email"])) {
echo "Hello";?><br>
<a href="logout.php">Logout</a>
<?php }

else{
    header("location:login.php");
}
?>