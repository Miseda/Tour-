<?php

$email_address = $_POST['email_address'];
$user_password = $_POST['user_password'];
$error = "";
 $conn= new mysqli ('localhost','root','','wdp');

if ($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}else{
    $stmt = $conn->prepare("select* from entry_details where email_address = ?");
    $stmt->bind_param("s",$email_address);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if( $stmt_result-> num_rows > 0){
        $data = $stmt_result-> fetch_assoc();
        if($data['user_password'] === $user_password){
            header("Location:landing.html");
            die;
        }else{
            echo "Invalid email or password";
        }

    }else{
        echo "Invalid email or password";
    }
   
}

