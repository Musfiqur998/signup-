<?php

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mcname = $_POST['mcname'];
    $suggestion = $_POST['suggestion'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'orea form');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullname, email, mcname, suggestion) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$fullname, $email, $mcname, $suggestion);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $conn->close();
    }

?>