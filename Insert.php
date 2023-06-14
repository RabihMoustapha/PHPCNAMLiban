<!doctype html>
<html>
    <head>
        <title>Insert</title>
    </head>
    <body>
        <?php
        require_once "Connection.php";
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {
            $Email = $_POST["email"];
            $Name = $_POST["name"];
            $Pass = $_POST["pass"];
            $query = "INSERT INTO `login` (`Name`, `Email`, `Password`) VALUES ('" . $Name . "', '" . $Email . "', '" . $Pass . "')";
            $result = mysqli_query($Connection, $query);
            setcookie("cookie", "'" . $Name . "'");
            echo $result;
            if ($result) {
                header("location:Login.php");
                echo $_COOKIE['cookie'];
            }
            echo "<h4>Your information is sending to the server successfuly</h4>";
        }
        ?>
    </body>
</html>