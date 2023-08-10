<!--Display the data-->
<?php
require_once "Connection.php";
$query1 = "Select * from `view`";
$result1 = mysqli_query($Connection, $query1);;
$nbr = mysqli_num_rows($result1);
?>
<table class="datatable" cellspacing="30" align="center">
    <tr>
        <th>
            Date
        </th>
        <th>
            Picture
        </th>
        <th>
            Video Link
        </th>
        <th>
            Downloability
        </th>
        <th>
            Link about game history
        </th>
    </tr>
    <?php
    for ($i = 0; $i < $nbr; $i++) {
        $row = mysqli_fetch_assoc($result1);
        echo "<tr>";
        echo "<td>$row[Date]</td>";
        echo "<td><img src='../Images/$row[GameImg]' class='user'></td>";
        echo "<td><a href='$row[TitleReference]' class='linkrow'>$row[TitleReference]</a></td>";
        echo "<td>$row[Downloability]</td>";
        echo "<td><a href='$row[Reference]' class='linkrow'>$row[Reference]</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game View</title>
        <link href="../Css/GameView.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../Java Script/GameView.js"></script>
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
                            <a href="Game.php">
                                <button class="btnlogin-popup">
                                    GAME
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
    </body>

    </html>