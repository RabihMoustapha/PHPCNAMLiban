<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) header("Location: Login.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game View</title>
    <link href="../Css/GameView.css" rel="stylesheet" type="text/css">
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
                        <a href="Add Emoji.php">
                            <button class="btnlogin-popup">
                                ADD EMOJI
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
    <!--Display the data-->
    <?php
    require_once "Connection.php";
    $query1 = "Select * from view";
    $result1 = mysqli_query($Connection, $query1);;
    $nbr = mysqli_num_rows($result1);
    ?>
    <table class="datatable" cellspacing="25">
        <tr>
            <th>Date</th>
            <th>Picture</th>
            <th>Downloability</th>
            <th>Link about game history</th>
        </tr>
        <?php
        for ($i = 0; $i < $nbr; $i++) {
            $row = mysqli_fetch_assoc($result1);
            echo "<tr>";
            echo "<td>$row[Date]</td>";
            echo "<td><a href='$row[TitleReference]' class='linkrow'><img src='../Images/$row[GameImg]' class='user'></a></td>";
            echo "<td>$row[Downloability]</td>";
            echo "<td><a href='$row[Reference]' class='linkrow'>$row[Reference]</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>

</html>