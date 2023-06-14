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
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: 0;
                font-family: 'Poppins', sans-serif;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-size: cover;
                background-position: center;
                background: url("desktop-wallpaper.jpg") no-repeat;
                color: white;
            }




            .wrapper {
                position: relative;
                width: 400px;
                height: 440px;
                background: transparent;
                border: 2px solid rgba(225, 225, 255, 5);
                border-radius: 20px;
                backdrop-filter: blur(20px);
                box-shadow: 0 0 30px rgba(0, 0, 0, 5);
                display: flex;
                justify-content: flex;
                align-items: center;
            }

            .register-link {
                color: yellow
            }

            .Forgot {
                color: yellow;
            }

            .wrapper .form-box {
                width: 100%;
                padding: 40px;
            }

            .wrapper .form-box.login {
                display: none;
            }

            .wrapper .icon-close {
                top: 0;
                right: 0;
                position: absolute;
                width: 45px;
                height: 45px;
                font-size: 2em;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                border-bottom-left-radius: 20px;
                cursor: pointer;
                z-index: 1;
            }

            .wrapper .icon-close:hover {
                color: red;
            }

            .form-box h2 {
                font-size: 2em;
                color: white;
                text-align: center;
            }

            .input-box {
                position: relative;
                width: 100%;
                height: 50px;
                border-bottom: 2px solid #162938;
                margin: 30px 0;
            }

            .input-box label {
                position: absolute;
                top: 50%;
                left: 5px;
                transform: translateY(-50%);
                font-size: 1em;
                color: white;
                font-weight: 500;
                pointer-events: none;
                transition: -5s;
            }

            .input-box input:focus~label,
            .input-box input:valid~label {
                top: -5px;
            }

            .input-box input {
                width: 100%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                font-size: 1em;
                color: white;
                font-weight: 600;
                padding: 0 35px 0 5px;

            }

            input {
                color: white;
            }

            .input-box .icon {
                position: absolute;
                right: 8px;
                font-size: 1.2em;
                line-height: 57px;
            }

            .remember-forgot {
                font-size: .9em;
                color: white;
                font-weight: 500;
                margin: -15px 0 15px;
                display: flex;
                justify-content: space-between;
            }

            .remember-forgot label input {
                accent-color: white;
                margin-right: 3px;
            }

            .remember-forgot a {
                color: white;
                text-decoration: none;
            }

            .remember-forgot a:hover {
                text-decoration: underline;
            }

            .btn {
                width: 100%;
                height: 45px;
                background: white;
                outline: none;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-weight: 500;
            }

            .login-register {
                font-size: .9em;
                color: white;
                text-align: center;
                font-weight: 500;
                margin: 25px 0 10px;
            }

            .login-register p a {
                color: white;
                text-decoration: none;
                font-weight: 600;
            }

            .login-register p a:hover {
                text-decoration: underline;
            }

            input:checked {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background: blue;
                color: white;
            }

            .c1 {
                width: 40px;
                height: 40px;
            }

            table {
                border: 1px solid crimson;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>
            <div class="form-box register">
                <h2>
                    REGISTRATION
                </h2>
                <form action="Insert.php" method="post">
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
                                <ion-icon onclick="display()" style="cursor:pointer;display:block;"id="close" name="lock-closed-outline"></ion-icon>
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