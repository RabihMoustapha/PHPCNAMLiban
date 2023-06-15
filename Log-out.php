<!DOCTYPE html>
<html>

<head>
    <title>Log-out</title>
</head>

<body>
    <?php
    session_start();
    session_destroy();
    header("Location:Login-Page.php");
    ?>
</body>

</html>