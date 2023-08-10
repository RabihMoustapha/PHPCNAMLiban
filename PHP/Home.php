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
if (isset($_POST['text-area']) && isset($_POST['Name']) && isset($_FILES['File']) && isset($_POST['Image_link'])) {
    $textarea = $_POST['text-area'];
    $Name = $_POST['Name'];
    //$Date = $_POST['Date'];
    $file = $_FILES['File']['name'];
    $ImageLink = $_POST['Image_link'];
    move_uploaded_file($_FILES['File']['tmp_name'], "../Images/" . $file);
    $query = "INSERT INTO `home`(`Name` , `Comment` , `Image`, `ImageLink`) VALUES ('" . $Name . "' , '" . $textarea . "' , '" . $file . "', '" . $ImageLink . "')";
    $result = mysqli_query($Connection, $query);
    if ($result) header("location: View.php");
}
?>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/Home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h2 class="logo">
            <i class="fa fa-upload" style="font-size:48px;color:red"></i>
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
    <form action="Home.php" method="post" enctype="multipart/form-data">
        <table class="hometable" cellspacing="10">
            <tr class="input-box">
                <th align="left">Name</th>
                <td class="first">
                    <input required type="text" name="Name" placeholder="E.G write a name" required>
                </td>
            </tr>
            <tr class="input-box">
                <th align="left" valign="top">Comment</th>
                <td class="second">
                    <textarea rows="7" name="text-area" placeholder="E.G write a comment" required></textarea>
                </td>

            </tr>
            <tr class="input-box">
                <th align="left">Image</th>
                <td colspan="3">
                    <input type="File" name="File" required>
                </td>
            </tr>
            <tr class="input-box">
                <th align="left">Image web link</th>
                <td>
                    <input type="text" name="Image_link" placeholder="E.G write an image link" required>
            </tr>
        </table>
        <div class="footer">
            <button class="form-button">Insert</button>
        </div>
    </form>
</body>

</html>