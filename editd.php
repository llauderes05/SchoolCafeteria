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
<?php
                        $sql = "SELECT `name`, `price`, `stocks` FROM `drinks` where id = '$id'";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <h1>Change details for <?php echo $row["name"] ?></h1>
                                <form action="updated.php" method="post">
                                <input type="hidden" name="id" required value="<?php echo $id; ?>" ><br>
                                <label>Name</label>
                                <input type="text" name="name" required value="<?php echo $row["name"] ?>"><br>
                                <label>Price</label>
                                <input type="text" name="price" required value="<?php echo $row["price"] ?>"><br>
                                <label>Stocks</label>
                                <input type="text" name="stocks" required value="<?php echo $row["stocks"] ?>"><br>
                                <input type="submit" value="Update"><br>
                            </form>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
</body>
</html>