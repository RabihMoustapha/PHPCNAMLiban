<!--Login verify-->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) header("Location: Login.php");
?>
<!--Read the data-->
<?php
require "Connection.php";
$query = "Select * from avatar where id=1";
$result = mysqli_query($Connection, $query);
$row = mysqli_fetch_assoc($result);
$Image = $row["Image"];
?>
<!--Update the profile-->
<?php
if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $image);
    $imageExtension = strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtension)) {
        echo
        "
                            <script type='text/javascript'>
                                alert('Invalid image extension');
                                document.location.href='../PHP/Avatar.php';
                            </script>
                        ";
    } else if ($size > 1200000) {
        echo "
                        <script type='text/javascript'>
                        alert('Image size is too large');
                        document.location.href='../PHP/Avatar.php';
                    </script>
                        ";
    } else {
        $query = "Update avatar set Image='" . $image . "' where id=1";
        $result = mysqli_query($Connection, $query);
        move_uploaded_file($_FILES['image']['tmp_name'], "../Avatar/" . $image);
        echo
        "
        <script type='text/javascript'>
          document.location.href='../PHP/Avatar.php';
          </script>
         ";
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar</title>
    <link href="../Css/Avatar.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../Java Script/Avatar.js"></script>
</head>

<body>
    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <table cellspacing="10">
                <tr>
                    <td>
                        <a href="Game.php">
                            <button class="btnlogin-popup">GAME</button>
                        </a>
                    </td>
                    <td>
                        <a href="Add Emoji.php">
                            <button class="btnlogin-popup">SOME EMOJI</button>
                        </a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <button onclick="teleport()" class="btn-teleport">TELEPORT</button>
                    </td>
                    <td>
                        <a href="Log-out.php">
                            <button class="btn-logout">
                                LOGOUT
                            </button>
                        </a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <a href="Main.php">
                            <button class="btn-avatar">MAIN</button>
                        </a>
                    </td>
                    <td>
                        <a href="Registration.php">
                            <button class="btn-register">REGISTER</button>
                        </a>
                    </td>
                </tr>
            </table>
        </nav>
    </header>
    <form id="form" action="Avatar.php" method="post" enctype="multipart/form-data">
        <h1>Your profile picture</h1><br />
        <div class="upload">
            <img src="../Avatar/<?php echo $Image ?>" width="125" height="125" title="<?php echo $Image ?>">
            <div class="round">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required>
                <i class="fa fa-camera"></i>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        document.getElementById("image").onchange = function() {
            document.getElementById("form").submit();
        }
    </script>
</body>

</html>