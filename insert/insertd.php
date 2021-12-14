<?php
 include_once 'connection.php';

    $na = $_REQUEST['name'];
    $pr = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];
    
    
    $sql = "INSERT INTO `drinks`(`name`, `price`, `stocks`) VALUES ('$na','$pr','$qty')";
    
	if ($conn->query($sql) === TRUE) {
		header("Location: drinks.php"); 
	}else{
		echo $conn->connect_error;
	}
	$conn->close();
 
// Close connection
$conn->close();

exit();
?>

