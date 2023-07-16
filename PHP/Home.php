<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!--Insert the comment in database-->
<?php
require_once "Connection.php";
if (isset($_POST['text-area']) && isset($_POST['Name']) && isset($_POST['Date']) && isset($_FILES['File']) && isset($_POST['Image_link'])) {
    $textarea = $_POST['text-area'];
    $Name = $_POST['Name'];
    $Date = $_POST['Date'];
    $file = $_FILES['File']['name'];
    $ImageLink = $_POST['Image_link'];
    move_uploaded_file($_FILES['File']['tmp_name'], "../Images/" . $file);
    $query = "INSERT INTO `home`(`Name` , `Comment` , `Date` , `Image`, `ImageLink`) VALUES ('" . $Name . "' , '" . $textarea . "' , '" . $Date . "' , '" . $file . "', '" . $ImageLink . "')";
    $result = mysqli_query($Connection, $query);
    if ($result) header("location: View.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/Home.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <h2 class="logo">
            <i class="fa fa-sign-in" style="font-size:48px;color:red">
            </i>
        </h2>
        <nav class="navigation">
            <a class="a1" href="Contact.php">CONTACT</a>
            <a class="not-visited" readonly>HOME</a>
            <a class="a1" href="Main.php">MAIN</a>
            <a class="a1" href="Service.php">SERVICES</a>
            <a class="a1" href="View.php">VIEW</a>
            <a href="Log-out.php">
                <button class="btnlogin-popup">
                    LOGOUT
                </button>
            </a>
        </nav>
    </header>
    <form name="Form" method="post" enctype="multipart/form-data">
        <table class="table" cellspacing="20">
            <tr>
                <th>Name:</th>
                <td>
                    <input required type="text" name="Name" placeholder="E.G write a name" required>
                </td>
            </tr>
            <tr>
                <th>Date:</th>
                <td>
                    <input type="date" name="Date" required>
                </td>
            </tr>
            <tr>
                <th>Comment:</th>
                <td>
                    <textarea cols="30" rows="10" name="text-area" placeholder="E.G write a comment" required></textarea>
                </td>

            </tr>
            <tr>
                <th>Image:</th>
                <td colspan="3">
                    <input type="File" name="File" required>
                </td>
            </tr>
            <tr>
                <th>Image Link:</th>
                <td>
                    <input type="text" name="Image_link" required>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="Form.action = 'Home.php'">Insert</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>