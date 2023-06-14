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
if (isset($_POST['gamename']) && isset($_POST['downloability']) && isset($_POST['ref'])) {
    $game = $_POST['gamename'];
    $down = $_POST['downloability'];
    $ref = $_POST['ref'];
    $query = "INSERT INTO view(GameName , Downloability , Reference) VALUES ('" . $game . "','" . $down . "','" . $ref . "')"; //SQL Query in view table
    $result = mysqli_query($Connection, $query); //Executing the query in the table view
    echo $result;
    $nbr = mysqli_num_rows($result); //Count the number of rows in $result
    for ($i = 0; $i < $nbr; $i++) { //Opening loop for
        $row = mysqli_fetch_assoc($result); //Fetch the result of variable $result with mysqli_fetch_assoc
        echo "<tr>"; //Create a tr tag
        echo "<td rowspan='4'>"; //Create a <td> with rowspan=4
        echo "<a href='#.php'>'" . $ref . "'"; //Opening an <a> with href=Game video
        echo "</a>"; //End of <a>
        echo "</td>"; //End of <td>
        echo "</tr>
        <tr class='p1'>
            <td>
               $row[GameName]
            </td>
        </tr>
        <tr class='p1'>
            <td>
                $row[Downloability]
            </td>
        </tr>
        <tr class='p1'>
            <td>
                <a href='$row[Reference]'>ABOUT $row[GameName]</a>
            </td>
        </tr>";
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Add</title>
        <link href="Add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form name="f1" method="post">
            <table>
                <tr>
                    <th>Game Name:</th>
                    <td>
                        <input type="text" name="gamename" required>
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
                        <button onclick="f1.action = 'Add.php'">Add</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>