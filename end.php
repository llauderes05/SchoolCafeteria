<?php include_once 'connection.php';


	$stocks = $_REQUEST['stocks'];
    $qty = $_REQUEST['qty'];

    echo $total = $stocks - $qty;




	$sql = "UPDATE `meals` SET `stocks`='$total' where id = '$id'"; // escape character
	if ($conn->query($sql) === TRUE) {
		echo $name." updated successfully!";
		header("Location: meals.php"); 
	} else {
		$conn->error;
	}
	$conn->close();
 ?>
