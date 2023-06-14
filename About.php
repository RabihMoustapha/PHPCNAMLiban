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
        <link href="About.css" type="text/css" rel="stylesheet">
    </head>
    <body>      <!--Intro to about page-->
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
        <hr />
        <br/>
        <!--Ending the about intro-->
    </body>

</html>