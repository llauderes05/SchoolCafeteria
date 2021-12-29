<?php include_once 'connection.php';


	$id = $_REQUEST['id'];
 

 ?>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Order</title>
     <link rel="stylesheet" href="style/order.css">
 </head>
 <body>
                    <?php
                        $sql = "SELECT `name`, `price`, `stocks` FROM `drinks` where id = '$id'";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <form action="endd.php" method="post">
                                <h1>How many would you like?</h1>
                                <input type='number' name="qty">
                                <input type="hidden" value="<?php echo $id; ?>" name="id">
                                <input type="hidden" value="<?php echo $row["stocks"] ?>" name="stocks">
                                <input type="submit">
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
     <!-- <form action="end.php" method="post">
        <h1>How many would you like?</h1>
        <input type='number' name="qty">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <input type="submit"> -->
</form>
    
 </body>
 </html>