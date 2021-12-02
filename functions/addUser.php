<?php
include('../db/config.php');
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
$firstname  = validate($_POST['firstName']);
$lastName   = validate($_POST['lastName']);
$username   = validate($_POST['username']);
$password   = password_hash(validate($_POST['password']), PASSWORD_DEFAULT);
$email      = validate($_POST['email']);


if($firstname =='' || $lastName =='' || $username =='' || $password==''|| $email=='')
{
    $msg ="Please fillup all the fields";
    header("Location: ../index.php?msg=$msg");
}else{
    $query = "INSERT INTO users (firstname, lastname, email, username , password)
    VALUES ('$firstname','$lastName', '$username', '$email','$password')";
    $result = mysqli_query( $conect,$query);
    

    if($result == true)
    {
        $msg ="New user '<b>".$firstname."</b>' added successfully";
        header("Location: ../userlist.php?msg=$msg");
    }else{
        $msg ="Username <b>".$username ."</b> and email <b>".$username."</b> is already exist";
        header("Location: ../index.php?msg=$msg");
    }
}

