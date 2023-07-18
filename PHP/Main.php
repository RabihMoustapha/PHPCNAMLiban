<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
} else {
    $email = $_SESSION['Email'];
    echo "<h1 class='welcome'>Welcome $email</h1>";
}
?>
<!doctype html>
<html>

<head>
    <title>Main</title>
    <link href="../Css/Main.css" rel="stylesheet" type="text/css">
    <script src="../Java Script/Main.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <form name="Form" method="post">
                <table cellspacing="10">
                    <tr>
                        <td>
                            <button onclick="Form.action = 'Game.php'" class="btnlogin-popup">GAME</button>
                        </td>
                        <td>
                            <button class="btnlogin-popup" onclick="Form.action='Sticker.php'">STICKER</button>
                        </td>
                    </tr>
                </table>
            </form>
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
    <table class="intro" cellspacing="20" align="center">
        <tr>
            <td align="center">
                HELLO USER,
            </td>
        </tr>
        <tr>
            <td align="center">
                HOW ARE YOU?
            </td>
        </tr>
        <tr>
            <td align="center">
                HERE IN GAME HUB, WE WILL GIVE YOU
            </td>
        </tr>
        <tr>
            <td align="center">
                INFORMATION ON ALL THAT CONCERNS <span style="color:yellow">A GAMER</span> AT THE CURRENT TIME..
            </td>
        </tr>
    </table>
</body>

</html>