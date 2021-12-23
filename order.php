<?php include_once 'connection.php';


	$stocks = $_REQUEST['stocks'];
 

 ?>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Order</title>
 </head>
 <body>
     <form action="end.php" method="post">
        <h1>How many would you like?</h1>
        <input type='number' name="qty">
        <input type="hidden" value="<?php echo $stocks; ?>" name="stocks">
        <input type="submit">
</form>
    
 </body>
 </html>