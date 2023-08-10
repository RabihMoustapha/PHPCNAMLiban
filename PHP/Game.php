<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!--Insert the data-->
<?php
require_once "Connection.php";
if (isset($_FILES['gamepicture']) && isset($_POST['downloability']) && isset($_POST['ref']) && isset($_POST['titleref'])) {
    $game = $_FILES['gamepicture']['name'];
    move_uploaded_file($_FILES['gamepicture']['tmp_name'], "../Images/" . $game);
    $down = $_POST['downloability'];
    $titleref = $_POST['titleref'];
    $ref = $_POST['ref'];
    $query = "INSERT into view(GameImg ,TitleReference, Downloability , Reference) VALUES ('" . $game . "','" . $titleref . "','" . $down . "','" . $ref . "')";
    $result = mysqli_query($Connection, $query);
    if ($result) header("location: GameView.php");
}
?>
<html>

<head>
    <title>Game Spot</title>
    <link href="../Css/Game.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Java Script/Game.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h2></h2>
        <nav class="navigation">
            <table cellspacing="10">
                <tr>
                    <td>
                        <a href="Main.php">
                            <button class="btnlogin-popup">
                                MAIN
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="GameView.php">
                            <button class="btnlogin-popup">
                                GAME VIEW
                            </button>
                        </a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <button onclick="teleport()" class="btn-teleport">TELEPORT</button>
                    </td>
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
    <form action="Game.php" method="post" enctype="multipart/form-data">
        <table style="margin-top:10%" cellspacing="10" cellpadding="20" class="addtable">
            <tr class="input-box">
                <th>Game Picture</th>
                <td>
                    <input type="File" name="gamepicture" required>
                </td>
            </tr>
            <tr class="input-box">
                <th>Video Link</th>
                <td class="first">
                    <input type="text" name="titleref" placeholder="Video about the game" required>
                </td>
            </tr>
            <tr class="input-box">
                <th>Downloability</th>
                <td class="second">
                    <input type="text" name="downloability" placeholder="Required machine" required>
                </td>
            </tr>
            <tr class="input-box">
                <th>Link about the game history</th>
                <td class="second">
                    <input type="text" name="ref" placeholder="Game history" required>
                </td>
            </tr>
        </table>
        <div class="footer">
            <button class="form-button">Add your game</button>
        </div>
    </form>
</body>

</html>