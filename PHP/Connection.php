<!DOCTYPE html>
<html>

<head>
    <title>Connection</title>
</head>
<?php
$Connection = mysqli_connect("localhost", "root", "", "gaminghub");
if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//echo "Connection succeful";
?>
</body>

</html>