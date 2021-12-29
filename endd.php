<?php include_once 'connection.php';


	$id = $_REQUEST['id'];
	$stocks = $_REQUEST['stocks'];
    $qty = $_REQUEST['qty'];

    $total = $stocks - $qty;

	$sql = "UPDATE `drinks` SET `stocks`='$total' where id = '$id'"; // escape character
	if ($conn->query($sql) === TRUE) {
		echo $name." updated successfully!";
		header("Location: thankyou.php"); 
	} else {
		$conn->error;
	}
	$conn->close();
 ?>
