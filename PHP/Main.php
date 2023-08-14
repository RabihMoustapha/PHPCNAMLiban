<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) header("Location:Login.php");
?>
<!--Intro-->
<?php
require_once "Connection.php";
$query = "Select * from login where Email='" . $_SESSION['Email'] . "'";
$result = mysqli_query($Connection, $query);
$row = mysqli_fetch_assoc($result);
echo "<h3 class='welcome'>Welcome $row[Name]</h3>";
?>
<html>

<head>
    <title>Main</title>
    <link href="../Css/Main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        function teleport() {
            let intro = alert("- Home \n - Service \n - Contact \n - View \n PAGE ONLY");
            let teleport = prompt("Enter a page to teleport");
            teleport = teleport.toLowerCase();
            while (teleport != "home" && teleport != "service" && teleport != "contact" && teleport != "view") {
                intro = alert("- Home \n - Service \n - Contact \n - View \n PAGE ONLY");
                teleport = prompt("Enter a page to teleport");
                teleport = teleport.toLowerCase();
            }
            switch (teleport) {
                case 'home':
                    window.location.href = "Home.php";
                    break;
                case 'service':
                    window.location.href = "Service.php";
                    break;
                case 'contact':
                    window.location.href = "Contact.php";
                    break;
                case 'view':
                    window.location.href = "View.php";
                    break;
            }
        }
    </script>
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
                            <button onclick="Form.action='Add Emoji.php'" class="btnlogin-popup">ADD EMOJI</button>
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