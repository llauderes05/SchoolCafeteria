<?php
    header("Location: meals.php");

    include_once("connection.php");
    
    $un = $_REQUEST['item_name'];
    $pw = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];
    
    $sql = "INSERT INTO `meals`(`username`, `password`) VALUES ('$un','$pw')";
    
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

