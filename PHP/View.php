<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) header("Locaton: Login.php");
?>
<html>

<head>
    <title>View</title>
    <link href="../Css/View.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <h2></h2>
        <nav class="navigation">
            <a class="a1" href="Contact.php">CONTACT</a>
            <a class="a1" href="Home.php">HOME</a>
            <a class="a1" href="Main.php">MAIN</a>
            <a class="a1" href="Service.php">SERVICES</a>
            <a class="not-visited">VIEW</a>
            <a href="Log-out.php">
                <input type="button" class="btnlogin-popup" value="LOGOUT">
            </a>
        </nav>
    </header>
    <!--Display the comment-->
    <?php
    require_once "Connection.php";
    $query = "SELECT * FROM login where Email='" . $_SESSION['Email'] . "'";
    $result = mysqli_query($Connection, $query);
    $Row = mysqli_fetch_assoc($result);
    $query1 = "SELECT * FROM home";
    $result1 = mysqli_query($Connection,  $query1);
    $nbrow = mysqli_num_rows($result1);
    ?>
    <table cellspacing="30" class="datatable" align="center">
        <th>Name</th>
        <th>Comment</th>
        <th>Date</th>
        <th>Image</th>
        <th>Download the image</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>
        <?php
        $name = $Row['Name'];
        for ($i = 0; $i < $nbrow; $i++) {
            $row = mysqli_fetch_assoc($result1);
            $Image = $row['Image'];
            $Name = $row['Name'];
            echo "<tr>";
            echo "<td class='name-row'>$row[Name]</td>";
            echo "<td class='comment-row'><pre>$row[Comment]</pre></td>";
            echo "<td>$row[Date]</td>";
            echo "<td><a href='$row[ImageLink]'><img class='user' src='../Images/$Image'></a></td>";
            echo "<td><a href='../Images/" . $Image . "' download><img src='../Image.png'></a></td>";
            if ($Row['Email'] == $row['Email']) {
                echo "<td><a href='Update.php?name=$row[Name]'><img src='../edit.png'></a></td>";
                echo "<td><a href='Delete.php?name=$row[Name]'><img src='../drop.png'></a></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>

</html>