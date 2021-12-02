<?php
include ('../db/config.php');
if(isset($_GET['id']))
{
    $id= $_GET['id'];
    $query = " DELETE FROM users WHERE id = $id";
    $result = mysqli_query( $conect,$query);

    if($result == true)
    {
        $msg ="The user has been deleted successfully";
        header("Location: ../userlist.php?msg=$msg");
    }

}