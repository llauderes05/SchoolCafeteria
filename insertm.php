<?php include_once 'connection.php' ?>

<?
    
    $un = $_REQUEST['name'];
    $pw = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];
    
    
    $sql = "INSERT INTO meals (`ITEM_NAME`, `PRICE`,'STOCKS') VALUES ('$un','$pw','$qty')";
    
    if($conn->query($sql) === true){
        echo '<script>alert("Successufully Added")</script>';
        header("location:   meals.php");
    } else {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
 
// Close connection
$conn->close();

exit();
?>

