<?php
    header("Location: admin.php");

    include_once("connection.php");
    
    $un = $_REQUEST['username'];
    $pw = $_REQUEST['password'];
    
    $sql = "INSERT INTO `admin`(`username`, `password`) VALUES ('$un','$pw')";
    
    if($conn->query($sql) === true){
        echo '<script>alert("Successufully Added")</script>';
        header("location:   admin.php");
    } else {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
 
// Close connection
$conn->close();

exit();
?>

