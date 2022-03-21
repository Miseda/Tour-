<?php

$email_address = $_POST['email_address'];
$user_password = $_POST['user_password'];


$conn= new mysqli ('localhost','root','','wdp');

if ($conn->connect_error){
    die("Connection Failed:". $conn->connect_error());
}else{
    $stmt = $conn->prepare("insert into entry_details (email_address, user_password) 
    values(?,?)");
    $stmt->bind_param("ss",$email_address,$user_password);
    $stmt->execute();
    echo "New Details entry inserted succesfully!";
    $stmt->close();
    $conn->close();
}