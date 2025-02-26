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
    elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = "";
        // print_r($_POST);
        $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = $conn->query($query);
        if($result->num_rows == 1){
            
            foreach($result as $row){
                $username = $row['username'];
                $email = $row['email'];
            }
            $_SESSION['user'] = ["username"=>$username, "email"=>$email];
            header("location: /php projects/discuss");
        }
    }
    elseif(isset($_GET['logout'])){
        session_unset();
        header("location: /php projects/discuss");
    }


?>