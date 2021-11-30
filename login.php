<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include_once 'connection.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
            
    $un = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = "SELECT * FROM admin WHERE username = '$un' and password = '$pw'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count > 0) {
        header("location:   index.html");
    } else {
        echo '<script>alert("Invalid Credentials")</script>';
    }
}


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>

<form class="box" action="" method="post">
  <h1>Login</h1>
  <input  type="text" name="username" placeholder="Username" autocomplete="off" required>
  <input  type="password" name="password" placeholder="Password" autocomplete="off" required>
  <input  class="login" type="submit" name="" value="Login">
  
</form>
<a href="index.php"><input class="back" type="submit" name="" value="Back"></a>

  </body>
</html>