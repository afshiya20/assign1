<?php
$insert = false;
if(isset($_POST['name'])){

    // Set connection variables
    $server = "localhost";
    $username = "coder";
    $password = "afshiya123";
    $db = "form";

    // Create a database connection
    $con = new mysqli($server, $username, $password, $db);

    // Check for connection success
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // database name (form) and then table name (data)
    $sql = "INSERT INTO data (name, email, message) VALUES ('$name', '$email', '$message');";

    // Execute the query
    if($con->query($sql) == true){
        // Flag for successful insertion
        $insert = true;
    }
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>