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
if (isset($_POST['gamename']) && isset($_POST['downloability']) && isset($_POST['ref']) && isset($_POST['title_ref'])) {
    $game = $_POST['gamename'];
    $down = $_POST['downloability'];
    $title_ref = $_POST['title_ref'];
    $ref = $_POST['ref'];
    $query = "INSERT into view(GameName ,TitleReference, Downloability , Reference) VALUES ('" . $game . "','" . $title_ref . "','" . $down . "','" . $ref . "')";
    $result = mysqli_query($Connection, $query);
?>
    <!--Display the data-->
    <?php
    $query1 = "Select * from `view`";
    $result1 = mysqli_query($Connection, $query1);;
    $nbr = mysqli_num_rows($result1);
    echo "<table border='6' style='margin-top:7%' cellspacing='0.1' align='right'>
                <th>
                    Game Name
                </th>
                <th>
                    Title Reference
                </th>
                <th>
                    Downloability
                </th>
                <th>
                    Reference
				</th>
            </tr>";
    ?>
<?php
    for ($i = 0; $i < $nbr; $i++) {
        $row = mysqli_fetch_assoc($result1);
        echo "<tr>";
        echo "<td>$row[GameName]</td>";
        echo "<td><a href='" . $title_ref . "' class='visited-link'>$row[TitleReference]</a></td>";
        echo "<td>$row[Downloability]</td>";
        echo "<td><a href='" . $ref . "' class='visited-link'>$row[Reference]</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

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
            <form name="Form" method="post">
                <table cellspacing="10">
                    <tr>
                        <td>
                            <button href="Form.action = 'Game.php'" class="btnlogin-popup">GAME</button>
                        </td>
                        <td>
                            <button class="btnlogin-popup" onclick="Form.action='../PHP/admin/AdminLogin.php'">ADMIN</button>
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
    <form name="Form" method="post">
        <table style="margin-top:10%" cellspacing="10" cellpadding="20">
            <tr>
                <th>Game Name:</th>
                <td>
                    <input type="text" name="gamename" placeholder="Game name" required>
                </td>
            </tr>
            <tr>
                <th>Title Reference:</th>
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
                    <button onclick="Form.action = 'Game.php'" class="Add">Add your game</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>