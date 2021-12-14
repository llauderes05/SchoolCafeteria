<?php include_once 'connection.php';


	$meals = $_REQUEST['meals'];
    $pasta = $_REQUEST['pasta'];
    $drinks = $_REQUEST['drinks'];
    echo $meals;
    echo $pasta;
    echo $drinks;

	// $sql = "UPDATE `meals` SET `name`='$name',`price`='$price',`stocks`='$stocks' where id = '$id'"; // escape character
	// if ($conn->query($sql) === TRUE) {
	// 	echo $name." updated successfully!";
	// 	header("Location: meals.php"); 
	// } else {
	// 	$conn->error;
	// }
	// $conn->close();
 ?>