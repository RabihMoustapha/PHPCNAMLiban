<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Services</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="SERVICE.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function Accept() {
                var p = prompt("Yes or No?");
                p = p.toUpperCase();
                if (p === "YES") {
                    alert("Ok accept");
                    window.location.href = "Contact.php";
                } else {
                    if (p === "NO")
                        alert("Thanks for viewing my website");
                    else
                        alert("Enter one of thiese two values");
                }
            }
        </script>
    </head>

    <body>
        <section class="service">
            <div class="content-box">
                <div class="container">
                    <h1>Our Services</h1>
                    <i class="fa fa-credit-card-alt" style="font-size:48px;color:red"></i>
                    <div class="row service">
                        <div class="col-md-3 text-center">
                            <div class="icon" onclick="Accept()">
                                <i class="fa fa-paint-brush" style="font-size:2em;margin-left:6px;margin-top:10px"></i>
                            </div>
                            <h3>Web <span>client</span></h3>
                            <p>
                                Become an client in Game Hub link
                            </p>
                        </div>
                    </div>
                    <div class="row service">
                        <div class="col-md-3 text-center">
                            <div class="icon" onclick="Accept()">
                                <i class="fa fa-user" style="font-size:2.5em;margin-left:10px;margin-bottom:5px"></i>
                            </div>
                            <h3>Web <span>Member</span></h3>
                            <p>
                                Become a member in GameHub
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>