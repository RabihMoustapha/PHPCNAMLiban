<?php
require_once "Connection.php";
session_start();
if ($_SESSION['isloggedin'] != 1) header("Location: Login.php");
else {
    if (isset($_POST['Name']) && !empty($_POST['Name']) && isset($_FILES['Image']) && !empty($_FILES['Image'])) {
        $name = $_POST['Name'];
        $image = $_FILES['Image']['name'];
        move_uploaded_file($_FILES['Image']['tmp_name'], "../Emojis/" . $image);
        $query = "Insert into emoji(Name, Image) values('" . $name . "', '" . $image . "')";
        $result = mysqli_query($Connection, $query);
        if ($result) header("Location: Emoji.php");
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Emoji</title>
    <link rel="stylesheet" type="text/css" href="../Css/Add Emoji.css">
    <script type="text/javascript" src="../Java Script/Add Emoji.js"></script>
</head>

<body>
    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <table cellspacing="10">
                <tr>
                    <td>
                        <a href="Game.php">
                            <button class="btnlogin-popup">GAME</button>
                        </a>
                    </td>
                    <td>
                        <a href="Main.php">
                            <button class="btnlogin-popup">MAIN</button>
                        </a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <button onclick="teleport()" class="btn-teleport">TELEPORT</button>
                    <td>
                        <a href="Log-out.php">
                            <button class="btn-logout">
                                LOGOUT
                            </button>
                        </a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <a href="Avatar.php">
                            <button class="btn-avatar">AVATAR</button>
                        </a>
                    </td>
                    <td>
                        <a href="Registration.php">
                            <button class="btn-register">REGISTER</button>
                        </a>
                    </td>
                </tr>
            </table>
        </nav>
    </header>
    <form name="Form" enctype="multipart/form-data" method="post">
        <table class="add-table" cellspacing="10">
            <tr class="input-box">
                <th>Name</th>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr class="input-box">
                <th>Image</th>
                <td><input type="file" name="Image"></td>
            </tr>
            <tr>
        </table>
        <div class="footer">
            <button onclick="Form.action='Add Emoji.php'" class="options">ADD</button>
            <button onclick="Form.action='Emoji.php'" class="options">EMOJIS</button>
        </div>
    </form>
</body>

</html>