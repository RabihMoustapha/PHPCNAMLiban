<!doctype html>
<head>
    <title>Insert into home</title>
</head>
<body>
    <?php
    require_once"Connection.php"; //include the connection
    if (isset($_POST['t1']) && isset($_POST['Name']) && isset($_POST['Date']) && isset($_FILES['File'])) { //Verify if the element is seting
        $text = $_POST['t1'];
        $Name = $_POST['Name'];
        $Date = $_POST['Date'];
        if (!empty($_FILES['File']['name'])) { // if is not empty $_File
            $file = $_FILES['File']['name'];
            move_uploaded_file($_FILES['File']['tmp_name'], "Images/" . $file); //move the uploded file to Images
        }
        $query = "INSERT INTO `home`(`Name` , `Comment` , `Date` , `Image`) VALUES ('" . $Name . "' , '" . $text . "' , '" . $Date . "' , '" . $file . "')"; //Add a query in home table
        $result = mysqli_query($Connection, $query); // Run the query
        echo "$result";
        if ($result)
            echo "True";
    }
    ?>
</body>
</html>