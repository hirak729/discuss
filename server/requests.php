<?php

session_start();

include('../common/db.php');

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $user = $conn->prepare("INSERT INTO `users`(`id`, `username`, `email`, `password`, `address`)
        VALUES (NULL,'$username','$email','$password','$address')");
        $result = $user->execute();
        if($result){
            // echo "User registered successfully";
            $_SESSION['user'] = ["username"=>$username, "email"=>$email];
            header("location: /php projects/discuss");
        }else{
            echo "User registration failed";
        }
    }
?>