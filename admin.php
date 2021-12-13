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
				<li><a href="#">s</a></li>
				<li><a href="#">Admin</a></li>
				<li><a href="#">Meals</a></li>
				<li><a href="#">Drinks</a></li>
				<li><a href="#">Desserts</a></li>
			</ul>
		</nav>
	</div>
	<div id="menuBtn">
		<img src="img/menu.png" id="menu">
		
	</div>
</body>
</html>

