<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include_once 'connection.php';

$id = $_GET['id'];
?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style/edit.css">
</head>
<body>
                    <?php
                        $sql = "SELECT `name`, `price`, `stocks` FROM `meals` where id = '$id'";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="edit">
                                    <h1>Change details for <?php echo $row["name"] ?></h1>
                                    <form action="updatem.php" method="post">
                                        <input type="hidden" name="id" required value="<?php echo $id; ?>" ><br>
                                        
                                        <input type="text" name="name" required value="<?php echo $row["name"] ?>"><br>
                                        
                                        <input type="text" name="price" required value="<?php echo $row["price"] ?>"><br>
                                       
                                        <input type="text" name="stocks" required value="<?php echo $row["stocks"] ?>"><br>
                                        <input type="submit" value="Update"><br>
                                    </form>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
        
</body>
</html>