<?php
require_once "Connection.php";
$name = $_GET['name'];
$query="Delete from home where Name = '".$name."'";
$result = mysqli_query($Connection, $query);
if($result) header("Location: View.php");
?>