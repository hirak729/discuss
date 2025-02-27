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
        $user_id = $user->insert_id;
        if($result){
            // echo "User registered successfully";
            $_SESSION['user'] = ["username"=>$username, "email"=>$email, "user_id"=>$user_id];
            header("location: /php projects/discuss");
        }else{
            echo "User registration failed";
        }
    }
    elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = "";
        $user_id = "";
        // print_r($_POST);
        $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = $conn->query($query);
        if($result->num_rows == 1){
            
            foreach($result as $row){
                $username = $row['username'];
                $email = $row['email'];
                $user_id = $row['id'];
            }
            $_SESSION['user'] = ["username"=>$username, "email"=>$email, "user_id"=>$user_id];
            header("location: /php projects/discuss");
        }
    }
    elseif(isset($_GET['logout'])){
        session_unset();
        header("location: /php projects/discuss");
    }
    elseif(isset($_POST['ask'])){
        // print_r($_POST);
        // print_r($_SESSION);

        $title = $_POST['title'];
        $description = $_POST['description'];
        $category_id = $_POST['category'];
        $user_id = $_SESSION['user']['user_id'];

        $question = $conn->prepare("INSERT INTO `questions`(`id`, `title`, `description`, `category_id`, `user_id`)
        VALUES (NULL,'$title','$description','$category_id','$user_id')");

        $result = $question->execute();
        $question = $question->insert_id;
        if($result){
            header("location: /php projects/discuss");
        }else{
            echo "Question not added";
        }
        

    }


?>