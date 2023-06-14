<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!doctype html>
<html>

    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                color: white;
                background: black;
                padding: 0;
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            form {
                margin-top: 4rem;
                width: 100%;
            }

            table {
                width: 100%;
            }

            table tr .first {
                width: 15%;
            }

            table tr .second {
                width: 85%;
            }

            input {
                padding: 0.5rem;
                box-sizing: border-box;
                width: 100%;
            }

            .area {
                width: 100%;
                resize: none;
                padding: 0.5rem;
                box-sizing: border-box;
            }

            .footer {
                padding: 0.5rem;
                box-sizing: border-box;
                width: 100%;
                display: flex;
                justify-content: flex-end;
            }

            .footer button {
                padding: 0.5rem;
                box-sizing: border-box;
                border: 0;
                border-radius: 4px;
                background-color: gray;
                cursor: pointer;
                transition: 0.2s;
                color: black;
                background-color: white;
            }
        </style>
    </head>

    <body>
        <form action="InsertC.php" method="post">
            <table border="0" cellpadding="10">
                <tr>
                    <td class="first">
                        <b>
                            <label>First name</label>
                        </b>
                    </td>
                    <td  class="second">
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
                        <textarea class="area" rows="7"required placeholder="Text here..."></textarea>
                    </td>
                </tr>
            </table>
            <div class="footer">
                <button type="submit">Contact us</button>
            </div>
        </form>
    </body>

</html>