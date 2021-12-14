<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/admin.css">
	<title>Admin</title>
</head>
<body>
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php"></a></li>
				<li><a href="admin.php">Admin</a></li>
                <h1 style="margin: 20px; color:white;">Stock</h1>
				<li><a href="meals.php">Meals</a></li>
				<li><a href="pasta.php">Pasta</a></li>
				<li><a href="drinks.php">Drinks</a></li>
                <h1 style="margin: 20px; color:white;"><a href="index.php">Home</a></h1>
			</ul>
		</nav>
	</div>
	<div id="menuBtn">
		<img src="img/menu.png" id="menu">
	</div>

	 
    <script>
        var menubtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        
        sideNav.style.right = "-250px";
        
        menubtn.onclick = function(){
            if (sideNav.style.right == "-250px"){
                sideNav.style.right = "0";
                menu.src ="img/close.png";
            }
            else{
                sideNav.style.right = "-250px";
                menu.src ="img/menu.png";
            }
        }
    </script>

<div class="table">
<table class="content-table">
                    <tr>
                        <th> Item Name </th>
                        <th> Price </th>
                        <th> Stock </th>
                        <th> Edit</th>
                        <th> Delete</th>
                    </tr>
                
                <tbody>
                    <?php
                        $sql = "SELECT *  FROM drinks";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <?php echo $row["name"] ?></td>
                                    <td> <?php echo $row["price"] ?></td>
                                    <td> <?php echo $row["stocks"] ?></td>
                                    <td><a href="editd.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                    <td><a href="deleted.php?name=<?php echo $row['name']; ?>">Delete</a></td>   
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        
                        $conn->close();
                        ?>
                </tbody>
            </table>
            </div>
            <div class="drinks">
            <h1>Add Stock for Drinks</h1>
                <form action="insertd.php" method="post">
                    <input type="text" placeholder="Name" name="name" autocomplete="off" required>
                    <input type="number" placeholder="Price" name="price" autocomplete="off" required>
                    <input type="number" placeholder="Quantity" name="qty" autocomplete="off" required>
                    <input type="submit">
                </form>
            </div>
</body>
</html>