<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include_once 'connection.php';

$id = $_GET['id'];
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
        <form action="updatep.php" method="post">
            <input type="hidden" name="id" required value="<?php echo $id; ?>" ><br>
			<label>Name</label>
			<input type="text" name="name" required><br>
            <label>Price</label>
            <input type="text" name="price" required><br>
            <label>Stocks</label>
            <input type="text" name="stocks" required><br>
            <input type="submit" value="Update"><br>
 		</form>
</body>
</html>