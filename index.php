<?php

    // include "index.html";
    //Use mysqli + procedural language(NO USE OF OOPS)

    //creating a server 
    $server = "localhostt";
    $username = "root";
    $password = "toor";

    //Making a connection variable
    $connection = mysqli_connect($server, $username, $password);
    //connection between server and database established using above instruction ---> mysqli is a predefined fnx
    
    if(!($connection)){
        die("Connection failed to this database failed due to"  . mysqli_connect_error());
    }
    echo "Successfully connected to Database";

    //Now entering the values coming from database 
    //Using post as to hide the sensiotive information from url bar
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    //Procedure --> using sql querry(remove the key attribute)
    $sql = "INSERT INTO `feedback` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `date and time`) VALUES ('$name',  '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());"; 

    echo $sql;
?>
