<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!--Insert the data-->
<?php
require_once 'Connection.php';
if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comment'])) {
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Comment = $_POST['comment'];
    $query = "Insert into contact(`Email`,`Subject`,`Comment`) values ('" . $Email . "','" . $Subject . "','" . $Comment . "')";
    $result = mysqli_query($Connection, $query);
    echo "<h3>Your form has been sended</h3>";
    echo "<table align='center'><tr><td>";
    echo "<img src='yes.png'></td></tr></table>";
}
?>
<!doctype html>
<html>

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/Contact.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <h2 class="logo">
            <i class="fa fa-sign-in" style="font-size:48px;color:red">
            </i>
        </h2>
        <nav class="navigation">
            <a class="not-visited">CONTACT</a>
            <a class="a1" href="Home.php">HOME</a>
            <a class="a1" href="Main.php">MAIN</a>
            <a class="a1" href="Service.php">SERVICES</a>
            
            <a href="Log-out.php">
                <button class="btnlogin-popup">
                    LOGOUT
                </button>
            </a>
        </nav>
    </header>
    <form action="Contact.php" method="post">
        <table border="0" class="table" cellpadding="10">
            <tr>
                <td class="first">
                    <b>
                        <label>First name</label>
                    </b>
                </td>
                <td class="second">
                    <input type="text" name="user" autocomplete="name" placeholder="First name">
                </td>
            </tr>
            <tr>
                <td>
                    <b>
                        <label>Last name</label>
                    </b>
                </td>
                <td>
                    <input type="text" name="Luser" autocomplete="name" placeholder="Last name">
                </td>
            </tr>
            <tr>
                <td>
                    <b>
                        <label>Email</label>
                    </b>
                </td>
                <td>
                    <input type="email" required name="email" autocomplete="email" placeholder="Email address">
                </td>
            </tr>
            <tr>
                <td>
                    <b>
                        <label>Phone number</label>
                    </b>
                </td>
                <td>
                    <input type="text" name="phone" required autocomplete="tel" placeholder="xx-xxxxxx">
                </td>
            </tr>
            <tr>
                <td>
                    <b>
                        <label>Subject</label>
                    </b>
                </td>
                <td>
                    <textarea class="area" rows="7" required placeholder="Text here..."></textarea>
                </td>
            </tr>
        </table>
        <div class="footer">
            <button type="submit">Contact us</button>
        </div>
    </form>
</body>

</html>