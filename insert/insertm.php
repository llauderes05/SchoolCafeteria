<?php
 include_once 'connection.php';

    $na = $_REQUEST['name'];
    $pr = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];
    
    
    $sql = "INSERT INTO `meals`(`name`, `price`, `stocks`) VALUES ('$na','$pr','$qty')";
    
	if ($conn->query($sql) === TRUE) {
		header("Location: meals.php"); 
	}else{
		echo $conn->connect_error;
	}
	$conn->close();
 
// Close connection
$conn->close();

exit();
?>

