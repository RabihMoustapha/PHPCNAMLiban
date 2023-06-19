<!doctype html>
<html>

    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
        </script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
        </script>
        <link href="../../Css/Login-Page.css" type="text/css" rel="stylesheet">
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
            <div class="form-box register">
                <h2>
                    ADMIN REGISTER
                </h2>
                <form action="AdminInsert.php" method="post">
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <input type="text" name="admin_name" required>
                        <label>USERNAME</label>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="mail-outline"></ion-icon>
                            </span>
                            <input type="email" name="admin_email" required>
                            <label>EMAIL</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon onclick="display()" style="cursor:pointer;display:block;"id="close" name="lock-closed-outline"></ion-icon>
                                <ion-icon onclick="display()" style="cursor:pointer;display:none;" id="open" name="lock-open-outline"></ion-icon>
                            </span>
                            <input id="pass" type="password" name="admin_pass" required>
                            <label>PASSWORD</label>
                        </div>
                        <button type="submit" class="btn">REGISTER</button>
                        <div class="login-register">
                            <p>Already have an account?
                                <a href="LoginAdmin.php" class="register-link">
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