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
if (isset($_FILES['gamename']) && isset($_POST['downloability']) && isset($_POST['ref']) && isset($_POST['title_ref'])) {
    $game = $_FILES['gamename']['name'];
    move_uploaded_file($_FILES['gamename']['tmp_name'], "../Images/" . $game);
    $down = $_POST['downloability'];
    $title_ref = $_POST['title_ref'];
    $ref = $_POST['ref'];
    $query = "INSERT into view(GameName ,TitleReference, Downloability , Reference) VALUES ('" . $game . "','" . $title_ref . "','" . $down . "','" . $ref . "')";
    $result = mysqli_query($Connection, $query);
    if ($result) header("location: GameView.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Game Spot</title>
    <link href="../Css/Game.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Java Script/Main.js"></script>
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
        </nav>
    </header>
    <form name="Form" method="post" enctype="multipart/form-data">
        <table style="margin-top:10%" cellspacing="10" cellpadding="20">
            <tr>
                <th>Game Name:</th>
                <td>
                    <input type="File" name="gamename" required>
                </td>
            </tr>
            <tr>
                <th>Link :</th>
                <td>
                    <input type="text" name="title_ref" placeholder="Video about the game" required>
                </td>
            </tr>
            <tr>
                <th>Downloability:</th>
                <td>
                    <input type="text" name="downloability" placeholder="Required machine" required>
                </td>
            </tr>
            <tr>
                <th>Reference:</th>
                <td>
                    <input type="text" name="ref" placeholder="Game history" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="Form.action = 'Game.php'" class="form-button">Add your game</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>