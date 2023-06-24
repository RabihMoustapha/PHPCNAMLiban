<?php
require_once "../Connection.php";
if (isset($_POST['admin_email']) && isset($_POST['admin_pass'])) {
    $email = $_POST['admin_email'];
    $pass = $_POST['admin_pass'];
    $query = "Select * from `admin` where Password='" . $pass . "' && Email = '" . $email . "'";
    $result = mysqli_query($Connection, $query);
    $nb = mysqli_num_rows($result);
    if ($nb > 0) {
        session_start();
        $_SESSION['logadmin'] = 1;
        $_SESSION['admin_email'] = $email;
        header("Location:Main.php");
    } else {
        echo "<h2>This content will not be sent to the browser.</h2>";
    }
}
