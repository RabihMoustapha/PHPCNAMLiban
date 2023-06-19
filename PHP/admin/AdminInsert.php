<?php
require_once "Connection.php";
if(isset($_POST['admin_name']) && isset($_POST['admin_email']) && isset($_POST['admin_pass'])){
$name = $_POST['admin_name'];
$email = $_POST['admin_email'];
$pass = $_POST['admin_pass'];
$query = "Insert into `admin`(`Name` , `Email` , `Password`) values ('".$name."' , '".$email."' , '".$pass."')";
$result = mysqli_query($Connection , $query);
if($result) echo "you have been saved in server as admin";
}
?>