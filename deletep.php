<?php

include "connection.php"; // Using database connection file here

$id = $_GET['name']; // get id through query string

$del = mysqli_query($conn,"delete from pasta where name = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:pasta.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record".$conn->connect_error; // display error message if not delete
}
?>