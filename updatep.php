<?php include_once 'connection.php';


	$name = $_REQUEST['name'];
	$price = $_REQUEST['price'];
	$stocks = $_REQUEST['stocks'];
	$id = $_REQUEST['id'];

	$sql = "UPDATE `pasta` SET `name`='$name',`price`='$price',`stocks`='$stocks' where id = '$id'"; // escape character
	if ($conn->query($sql) === TRUE) {
		echo $name." updated successfully!";
		header("Location: pasta.php"); 
	} else {
		$conn->error;
	}
	$conn->close();
 ?>