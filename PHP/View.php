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
</body>

</html>