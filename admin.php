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
                        <th> System ID </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Delete</th>
                    </tr>
                
                <tbody>
                    <?php
                        $sql = "SELECT ID, username, password FROM admin";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <?php echo $row["ID"] ?></td>
                                    <td> <?php echo $row["username"] ?></td>
                                    <td> <?php echo $row["password"] ?></td>
                                    <td><a class = "second" href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a></td>   
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
            
            <section id="bg">
                <div class="login-box">
                    <h1>Add User Here</h1>
                    <form action="insert.php" method="post">
                        
                        <input type="text" placeholder="Add Username" name="username" required>
                        
                        <input type="password" placeholder="Add Password" name="password" required>
                        <input type="submit" >
                    </form>
                </div>

            </section>

            
</body>
</html>

