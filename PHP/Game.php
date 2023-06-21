<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!--End of Login verify-->
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
	<!--End of insert-->
	<!--Display the data-->
	<?php
	$query1 = "Select * from `view`";
	$result1 = mysqli_query($Connection , $query1);;
	$nbr = mysqli_num_rows($result1);
    echo "<table border='6' cellpadding='20' cellspacing='0.1' align='right'>
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
        echo "<td>$row[TitleReference]</td>";
        echo "<td>$row[Downloability]</td>";
        echo "<td>$row[Reference]</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<!--End of display-->

<head>
    <title>Game Spot</title>
    <link href="../Css/Game.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Add your game here :</h1>
    <form name="Form" method="post">
        <table border="1" cellspacing="0.1" cellpadding="10">
            <tr>
                <th>Game Name:</th>
                <td>
                    <input type="text" name="gamename" placeholder="The game name" required>
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
                    <input type="text" name="downloability" placeholder="The machine who download this game" required>
                </td>
            </tr>
            <tr>
                <th>Reference:</th>
                <td>
                    <input type="text" name="ref" placeholder="Add a site to see the game history" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="Form.action = 'Game.php'">Add your game</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>