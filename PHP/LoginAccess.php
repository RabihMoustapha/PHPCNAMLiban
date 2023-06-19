<!doctype html>
<html>
    <head>
        <title>Login Access</title>
    </head>
    <body>
        <?php
        require_once "Connection.php"; // include the connection
        if (isset($_POST['LoginEmail']) && !empty($_POST['LoginEmail']) && isset($_POST['LoginPassword']) && !empty($_POST['LoginPassword'])) { // Verify the set of elements
            $Email = $_POST['LoginEmail'];
            $Password = $_POST['LoginPassword'];
            $query = "SELECT * FROM `login` WHERE Password = '" . $Password . "' and Email = '" . $Email . "'"; // Add a query in login table
            $result = mysqli_query($Connection, $query); // Run the query
            $nbrow = mysqli_num_rows($result); // Number of rows in $result
            if ($nbrow > 0) {
                session_start(); // Start a session
                $_SESSION['isloggedin'] = 1;
                $_SESSION['Email'] = $Email;
                header("location:Main.php"); //Go to Home.php
            } else {
                echo "<h2>This content will not be sent to the browser.</h2>"; // Display an error message
            }
        }
        ?>
    </body>
</html>