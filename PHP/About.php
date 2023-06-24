<!-- Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!doctype html>
<html>

<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/About.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header>
        <h2 class="logo">
            <i class="fa fa-sign-in" style="font-size:48px;color:red">
            </i>
        </h2>
        <nav class="navigation">
            <a class="a1" href="Home.php">HOME</a>
            <a class="not-visited">ABOUT</a>
            <a class="a1" href="Service.php">SERVICES</a>
            <a class="a1" href="Contact.php">CONTACT</a>
            <a href="Log-out.php">
                <button class="btnlogin-popup">
                    LOGOUT
                </button>
            </a>
        </nav>
    </header>
    <table align="center">
        <tr>
            <td class="zoom" align="center">
                HELLO USER,
            </td>
        </tr>
        <tr>
            <td class="zoom" align="center">
                HOW ARE YOU?
            </td>
        </tr>
        <tr>
            <td class="zoom" align="center">
                HERE IN GAME HUB, WE WILL GIVE YOU
            </td>
        </tr>
        <tr>
            <td class="zoom" align="center">
                INFORMATION ON ALL THAT CONCERNS <span style="color:yellow">A GAMER</span> AT THE CURRENT TIME..
            </td>
        </tr>
    </table>
</body>

</html>