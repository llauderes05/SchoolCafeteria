<?php

    include_once'connection.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Page</title>
    <link rel="stylesheet" href="style/costumer.css">
</head>
<body>
<form action="order.php" method="post">
    <div>
        <table class="styled-table">
            <thead>
            <tr>
                <th colspan="4">MENU</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Available</th>
                <th> </th>
            </tr>
            
            <tr>
                <th colspan="4">MEALS</th>
            </thead>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `name`, `price`, `stocks`, `id` FROM `meals`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <?php echo $row["name"] ?></td>
                                    <td> <?php echo $row["price"] ?></td>
                                    <td> <?php echo $row["stocks"] ?></td>
                                    <td><a href="orderm.php?id=<?php echo $row['id']; ?>">Order</a></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>

            <thead>
            <tr>
                <th colspan="4">PASTA</th>
            </thead>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `name`, `price`, `stocks`, `id` FROM `pasta`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <?php echo $row["name"] ?></td>
                                    <td> <?php echo $row["price"] ?></td>
                                    <td> <?php echo $row["stocks"] ?></td>
                                    <td><a href="orderp.php?id=<?php echo $row['id']; ?>">Order</a></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>
            <thead>
            <tr>
                <th colspan="4">DRINKS</th>
            </thead>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `name`, `price`, `stocks`, `id` FROM `drinks`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <?php echo $row["name"] ?></td>
                                    <td> <?php echo $row["price"] ?></td>
                                    <td> <?php echo $row["stocks"] ?></td>
                                    <td><a href="orderd.php?id=<?php echo $row['id']; ?>">Order</a></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>
            <!-- </tbody>
            <tr>
                <td colspan="4">
                <input type="submit" value="Submit">
                </form></td>
            </tr> -->
        </table>
    </div>
</body>
</html>