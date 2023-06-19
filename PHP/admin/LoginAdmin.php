<!doctype html>
<html>

<head>
    <title>LOGIN ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" type="module">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
    </script>
    <link href="../../Css/Login.css" rel="stylesheet" type="text/css">
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
        <form action="LogAdmin.php" method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
                <input type="email" name="admin_email">
                <label>EMAIL</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon onclick="display()" style="cursor:pointer;display:block;" id="close" name="lock-closed-outline"></ion-icon>
                    <ion-icon onclick="display()" style="cursor:pointer;display:none;" id="open" name="lock-open-outline"></ion-icon>
                </span>
                <input type="password" id="pass" name="admin_password">
                <label>PASSWORD</label>
            </div>
            <button class="btn">LOGIN AS ADMIN</button>
        </form>
    </div>
</body>

</html>