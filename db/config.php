<?php
$host = 'localhost';
$dbName = 'adduser-superstar211';
$dbUser = 'root';
$dbPass = '';

$conect = mysqli_connect($host,$dbUser,$dbPass,$dbName);

if($conect == false)
{
    echo '<h3>DB Connection Failed</h3>';
}

