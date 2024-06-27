<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost','root','','demo');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into person(name, email, subject, message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name, $email, $subject, $message);
        $stmt->execute();
        echo"We'll be contact you within 24hours...";
        $stmt->close();
        $conn->close();
    }
?>