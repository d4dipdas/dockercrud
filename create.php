<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn = mysqli_connect('db', 'dip', 'pass', 'testapp');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error creating record: " . $conn->error;
    }

    $conn->close();
?>