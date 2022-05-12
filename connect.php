<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    //Database connection
    $conn = new mysqli('localhost', 'root','','beavertraveldb')
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(name, lastname, email, password)
        values(?, ?, ?, ?)")
        $stmt->bind_param("ssss", $name, $lastname, $email, $password);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
    

?>