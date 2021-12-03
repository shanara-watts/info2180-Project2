<?php

require_once 'config.php';

function userLogin($email,$password){
    if(!(checkLogin($email,$password))){
        echo "Incorrect email or password";
        return false;
    }
}

function checkLogin($email,$password){
    $conn = new PDO('mysql:host=localhost; dbname = bugme;', 'root', 'password');
    $queryLogin = "SELECT 'id', 'firstname', 'lastname' FROM 'Users' WHERE 'email' = '$email'";
    $stmt = $conn->query($queryLogin);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if($res){
        $_SESSION["login_id"] = $res['id'];
        $_SESSION["firstname"] = $res['firstname'];
        $_SESSION["lastname"] = $res['lastname'];
        header("Location: ../header.php");
    }

    else{
        return false;
    }

    if(isset($_SESSION["login_id"])){
        header("Location: ../header.php");
    }

    if(isset($_POST['login'])){
        $username = $_POST['email'];
        $password = $_POST['password'];

        userLogin($email,$password);
    }
}
?>