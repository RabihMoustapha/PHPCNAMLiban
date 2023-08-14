<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) header("Location:Login.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="../Css/Update.css">
</head>

<body>
    <header>
        <h2 class="logo">
            <i class="fa fa-upload" style="font-size:48px;color:red"></i>
        </h2>
        <nav class="navigation">
            <a class="a1" href="Contact.php">CONTACT</a>
            <a class="a1" href="Home.php">HOME</a>
            <a class="a1" href="Main.php">MAIN</a>
            <a class="a1" href="Service.php">SERVICES</a>
            <a class="not-visited" readonly>VIEW</a>
            <a href="Log-out.php">
                <button class="btnlogin-popup">
                    LOGOUT
                </button>
            </a>
        </nav>
    </header>
    <!--Update method-->
    <?php
    require_once "Connection.php";
    $email = $_SESSION['Email'];
    $query1 = "Select * from login where Email='" . $email . "'";
    $result1 = mysqli_query($Connection, $query1);
    $Row = mysqli_fetch_assoc($result1);
    echo "<input type='hidden' id='Name' value=$Row[Name]>";
    $name = $_GET['name'];
    $query = "Select * from home where Name='" . $name . "'";
    $result = mysqli_query($Connection, $query);
    $nbrow = mysqli_num_rows($result);
    ?>
    <form action="Update2.php" enctype="multipart/form-data" method="post">
        <?php
        for ($i = 0; $i < $nbrow; $i++) {
            echo "<table class='hometable' cellspacing='30'>";
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<td><input type='text' name='Name' value=$row[Name] placheholder='E.G write him name' required></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Comment</th>";
            echo "<td><pre><textarea name='Comment' value=$row[Comment] rows=7 placeholder='E.G write him email' required></textarea></pre></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Image</th>";
            echo "<td><input type='file' name='File' required></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Image website</th>";
            echo "<td><input type='text' name='Link' value=$row[ImageLink] placeholder='E.G write him link' required></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br/>
        <input type='submit' value='UPDATE'>
    </form>
</body>

</html>