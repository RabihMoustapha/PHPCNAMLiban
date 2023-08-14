<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) header("Location:Login.php");
?>
<!--Update method-->
<?php
require_once "Connection.php";
if (isset($_POST['Name']) && isset($_POST['Comment']) && isset($_FILES['File']) && isset($_POST['Link'])) {
    $name = $_POST['Name'];
    $comment = $_POST['Comment'];
    $image = $_FILES['File']['name'];
    move_uploaded_file($_FILES['File']['tmp_name'], "../Images/" . $image);
    $link = $_POST['Link'];
    $query = "Update home set Comment='" . $comment . "', Image='" . $image . "', ImageLink='" . $link . "', Name='" . $name . "' where Email='" . $_SESSION['Email'] . "'";
    $result = mysqli_query($Connection, $query);
    if ($result) header("Location: View.php");
}
?>