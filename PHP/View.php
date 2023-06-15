<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!--End of Login verify-->
<?php
//include the connection
require_once "Connection.php";
//Make sur to put the object
if (isset($_POST['gamename']) && isset($_POST['downloability']) && isset($_POST['ref']) && isset($_POST['title_ref'])) {
    $game = $_POST['gamename'];
    $down = $_POST['downloability'];
    $title_ref = $_POST['title_ref'];
    $ref = $_POST['ref'];
    $query = "INSERT into view(GameName ,TitleReference, Downloability , Reference) VALUES ('" . $game . "','" . $title_ref . "','" . $down . "','" . $ref . "')"; //SQL Query in view table
    $result = mysqli_query($Connection, $query); //Executing the query in the table view
    echo "<h2>Insert successfuly</h2>";
    for ($i = 0; $i < 4; $i++) { //Opening loop for
        $row = mysqli_fetch_assoc($result); //Fetch the result of variable $result with mysqli_fetch_assoc
        echo "<tr>";
        echo "<td>";
        echo "<a href='$row[TitleReference]'>$row[GameName]</a>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$row[Downloability]</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "<a href='$row[Reference]'>ABOUT $row[GameName]</a>";
        echo "</td>";
        echo "</tr>";
    }
}
?>

<head>
    <title>Game Spot</title>
    <link href="../Css/View.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Add your game here :</h1>
    <form name="Form" method="post">
        <table cellpadding="10">
            <tr>
                <th>Game Name:</th>
                <td>
                    <input type="text" name="gamename" required>
                </td>
            </tr>
            <tr>
                <th>Title Reference:</th>
                <td>
                    <input type="text" name="title_ref" required>
                </td>
            </tr>
            <tr>
                <th>Downloability:</th>
                <td>
                    <input type="text" name="downloability" required>
                </td>
            </tr>
            <tr>
                <th>Reference:</th>
                <td>
                    <input type="text" name="ref" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="Form.action = 'View.php'">Add</button>
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <!--<form name="Form" method="post">
        <table border="1" cellspacing="7" cellpadding="5">
            <tr>
                <th rowspan="4">
                    <a href="Assassin.php">
                        ASSASSIN CREED
                    </a>
                </th>
            </tr>
            <tr>
                <td>
                    PC , PS4 OR 5 , XBOX IN ANY VERSION
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://en.wikipedia.org/wiki/assassin%27s_creed">ABOUT ASSASSIN</a>
                </td>
            </tr>
            <tr>
                <td>
                    FREE IN ANY APK STORE
                </td>
            </tr>
            <tr>
                <th rowspan="4">
                    <a href="Cr.php">
                        CLASH ROYALE
                    </a>
                </th>
            </tr>
            <tr>
                <td>
                    MOBILE , PC ONLY
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://play.google.com/store/apps/details?id=com.supercell.clashroyale&hl=en_us">ABOUT CR</a>
                </td>
            </tr>
            <tr>
                <td>
                    FREE IN ANY APK STORE
                </td>
            </tr>
            <tr>
                <th rowspan="4">
                    <a href="God of war.php">
                        GOD OF WAR RAGNAROCK
                    </a>
                </th>
            </tr>
            <tr>
                <td>
                    PS4 , PS5 , PC
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://en.wikipedia.org/wiki/god_of_war_ragnar%c3%b6k">
                        ABOUT GOD OF WAR RAGNAROK
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    FREE IN ANY APK STORE
                </td>
            </tr>
            <tr>
                <th rowspan="4">
                    <a href="Minecraft.php">
                        MINECRAFT
                    </a>
                </th>
            </tr>
            <tr>
                <td>
                    PC , XBOX , PS4 , PS5 ,NITENDO SWITCH AND MOBILE
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://www.minecraft.net/en-us">
                        ABOUT MINECRAFT
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    19.99 $
                </td>
            </tr>
            <tr>
                <th rowspan="4">
                    <a href="PubgMobile.php">
                        PUBG MOBILE
                    </a>
                </th>
            <tr>
                <td>
                    MOBILE , PC AND LAPTOPS
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://www.pubgmobile.com/ar/home.shtml">ABOUT PUBGMOBILE</a>
                </td>
            </tr>
            <tr>
                <td>
                    FREE IN ANY APK STORE
                </td>
            </tr>
        </table>
    </form>-->
</body>

</html>