<?php

    include_once'connection.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Costumer Page</title>
    <link rel="stylesheet" href="style/costumer.css">
</head>
<body>
    <div>
        <table>
            <tr><th colspan="4">MENU</th></tr>
            <tr>
                <th>ITEM NAME</th>
                <th>PRICE</th>
                <th>STOCKS</th>
                <th>QTY</th>
            </tr>
            <tr>
                <th colspan="4">MEALS</th>
            </tr>
            <tbody>
            <?php
                        $sql = "SELECT `ITEM_NAME`, `PRICE`, `STOCKS` FROM `meals`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["ITEM_NAME"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["PRICE"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["STOCKS"] ?></td>
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
                        $sql = "SELECT `ITEM_NAME`, `PRICE`, `STOCKS` FROM `pasta`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["ITEM_NAME"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["PRICE"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["STOCKS"] ?></td>
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
                        $sql = "SELECT `ITEM_NAME`, `PRICE`, `STOCKS` FROM `drinks`";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["ITEM_NAME"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["PRICE"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["STOCKS"] ?></td>
                                    <td><input type="number"></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        ?>
            </tbody>
        </table>
    </div>
</body>
</html>