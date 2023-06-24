<!--Start register-->
<?php
require_once "Connection.php";
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {
    $Email = $_POST["email"];
    $Name = $_POST["name"];
    $Pass = $_POST["pass"];
    $query = "INSERT INTO `login` (`Name`, `Email`, `Password`) VALUES ('" . $Name . "', '" . $Email . "', '" . $Pass . "')";
    $result = mysqli_query($Connection, $query);
    echo $result;
    if ($result) {
        header("location:Login.php");
    }
    echo "<h4>Your information is sending to the server successfuly</h4>";
}
?>
<!doctype html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
    </script>
    <link href="../Css/Registration.css" type="text/css" rel="stylesheet">
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
    <div class="wrapper">
        <div class="form-box">
            <h2>
                REGISTRATION
            </h2>
            <form action="Login-Page.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="text" name="name" required>
                    <label>USERNAME</label>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label>EMAIL</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon onclick="display()" style="cursor:pointer;display:block;" id="close" name="lock-closed-outline"></ion-icon>
                            <ion-icon onclick="display()" style="cursor:pointer;display:none;" id="open" name="lock-open-outline"></ion-icon>
                        </span>
                        <input id="pass" type="password" name="pass" required>
                        <label>PASSWORD</label>
                    </div>
                    <button type="submit" class="btn">REGISTER</button>
                    <div class="login-register">
                        <p>Already have an account?
                            <a href="Login.php" class="register-link">
                                LOGIN
                            </a>
                        </p>
                    </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>