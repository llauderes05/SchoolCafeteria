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
    <div>
        <table>
            <tr><th colspan="4">MENU</th></tr>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Available</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <th colspan="4">MEALS</th>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `name`, `price`, `stocks` FROM `meals`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["name"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["price"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["stocks"] ?></td>
                                    <td><input type="number"></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>

            <tr>
                <th colspan="4">PASTA</th>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `name`, `price`, `stocks` FROM `pasta`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["name"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["price"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["stocks"] ?></td>
                                    <td><input type="number"></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>
            <tr>
                <th colspan="4">DRINKS</th>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `name`, `price`, `stocks` FROM `drinks`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["name"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["price"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["stocks"] ?></td>
                                    <td><input type="number"></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>
            <tr>
                <td colspan="4"><form action="index.php" method="post">
                <input type="submit" value="Submit">
                </form></td>
            </tr>
        </table>
    </div>
</body>
</html>