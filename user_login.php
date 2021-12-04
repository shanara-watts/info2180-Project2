<?php 

header('Access-Control-Allow-Origin: *'); 

require_once 'config.php';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    echo $e->getMessage();
  }

  session_start();

  if (isset($_POST["login"])){
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
      $password = md5($password);


      try {
        $stmt = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($results) === 1) {
            $_SESSION['userid'] = $results[0]['id'];
        } else {
            echo '<script>alert("Failed")</script>';
        }
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
  }

  if (isset($_SESSION['userid'])) {
    echo 'sessionid'.$_SESSION['userid'];
    header("location:../home.html");
}
  
?>


