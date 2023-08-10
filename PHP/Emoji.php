<?php
echo "<header>
<h2 class='logo'></h2>
<nav class='navigation'>
    <table cellspacing='10'>
        <tr>
            <td>
                <a href='Game.php'>
                    <button class='btnlogin-popup'>GAME</button>
                </a>
            </td>
            <td>
                <a href='Main.php'>
                    <button class='btnlogin-popup'>MAIN</button>
                </a>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <button onclick='teleport()' class='btn-teleport'>TELEPORT</button>
            <td>
                <a href='Log-out.php'>
                    <button class='btn-logout'>
                        LOGOUT
                    </button>
                </a>
            </td>
        </tr>
    </table>
    <table>
    <tr>
        <td>
            <a href='Avatar.php'>
                <button class='btn-avatar'>AVATAR</button>
            </a>
        </td>
        <td>
        <a href='Registration.php'>
            <button class='btn-register'>REGISTER</button>
        </a>
    </td>
    </tr>
</table>
</nav>
</header>";
require_once "Connection.php";
session_start();
if ($_SESSION['isloggedin'] == 1) {
    $query = "Select * from emoji";
    $result = mysqli_query($Connection, $query);
    $nbrow = mysqli_num_rows($result);
?>
    <table class="database" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Download</th>
        </tr>
    <?php
    for ($i = 0; $i < $nbrow; $i++) {
        $row = mysqli_fetch_assoc($result);
        $img = $row['Image'];
        echo "<tr>";
        echo "<td class='rowname'>$row[Name]</td>";
        echo "<td><img src='../Emojis/" . $img . "' class='rowimg'></td>";
        echo "<td><a href='../Emojis/" . $img . "' download><img src='../Image.png'></a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else header("Location: Login.php");
    ?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Emoji</title>
        <link rel="stylesheet" type="text/css" href="../Css/Emoji.css">
        <script type="text/javascript" src="../Java Script/Emoji.js"></script>
    </head>

    <body>

        <body>
            <br/>
            <center>
                <h3>Thanks for watching</h3>
            </center>
        </body>

    </html>