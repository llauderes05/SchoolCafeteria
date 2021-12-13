<?php

include "connection.php"; // Using database connection file here

$id = $_GET['ITEM_NAME']; // get id through query string

$del = mysqli_query($conn,"delete from meals where ITEM_NAME = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:meals.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record".$conn->connect_error; // display error message if not delete
}
?>