<?php
    $firstName = $_POST['firstName'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstName, password)
            values(?, ?)") 
        $stmt->blind_param("ss", $firstName, $password);    
        $stmt->execute();
        echo "registaration Successfully..."
        $stmt->close();
        $conn->close();
    }
?>