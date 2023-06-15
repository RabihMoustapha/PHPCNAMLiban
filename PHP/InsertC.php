<!doctype html>
<html>
    <head>
        <title>Insert C</title>
    </head>
    <body>
        <?php
        session_start();
        require_once 'Connection.php';
        if ($_SESSION['isloggedin'] != 1) {
            header("location : Login-Page.php");
        } else {
            if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comment'])) {
                $Email = $_POST['email'];
                $Subject = $_POST['subject'];
                $Comment = $_POST['comment'];
                $query = "Insert into contact(`Email`,`Subject`,`Comment`) values ('" . $Email . "','" . $Subject . "','" . $Comment . "')";
                $result = mysqli_query($Connection, $query);
                //echo "$result";
                echo "<h3>Your form has been sended</h3>";
                echo "<table align='center'><tr><td>";
                echo "<img src='yes.png'></td></tr></table>";
            }
        }
        ?>
    </body>
</html>