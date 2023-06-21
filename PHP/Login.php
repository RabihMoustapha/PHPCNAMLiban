<!--Login access-->
<?php
require_once "Connection.php";
if (isset($_POST['LoginEmail']) && !empty($_POST['LoginEmail']) && isset($_POST['LoginPassword']) && !empty($_POST['LoginPassword'])) {
    $Email = $_POST['LoginEmail'];
    $Password = $_POST['LoginPassword'];
    $query = "SELECT * FROM `login` WHERE Password = '" . $Password . "' and Email = '" . $Email . "'";
    $result = mysqli_query($Connection, $query);
    $nbrow = mysqli_num_rows($result);
    if ($nbrow > 0) {
        session_start();
        $_SESSION['isloggedin'] = 1;
        $_SESSION['Email'] = $Email;
        header("location:Main.php");
    } else {
        echo "<h2>This content will not be sent to the browser.</h2>";
    }
}
?>
<!--End of login access-->
<!doctype html>
<html>

<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" type="module">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
    </script>
    <link href="../Css/Login.css" rel="stylesheet" type="text/css">
    <script>
        function display() {
            var pass = document.getElementById("pass");
            var open = document.getElementById("open");
            var close = document.getElementById("close");
            if (pass.type == "password") {
                pass.type = "text";
                open.style.display = "block";
                close.style.display = "none";
            } else {
                pass.type = "password";
                open.style.display = "none";
                close.style.display = "block";
            }
        }
    </script>
</head>

<body>
    <div class="form-box login">
        <h2>
            LOGIN
        </h2>
        <form action="Login.php" method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
                <input type="email" name="LoginEmail">
                <label>EMAIL</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon onclick="display()" style="cursor:pointer;display:block;" id="close" name="lock-closed-outline"></ion-icon>
                    <ion-icon onclick="display()" style="cursor:pointer;display:none;" id="open" name="lock-open-outline"></ion-icon>
                </span>
                <input type="password" id="pass" name="LoginPassword">
                <label>PASSWORD</label>
            </div>
            <button class="btn">LOGIN</button>
        </form>
    </div>
</body>

</html>