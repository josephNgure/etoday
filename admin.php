<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin"]) ){
    header("location: login/login_admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<?php
	include_once 'includes/header2.php';
	
	?>
	<br><br><br>
<a href="product_add.php"><button class="btn btn-lg btn-primary" style="padding-left: 20px; margin-left: 20px">Add produts</button></a>
<br><br><br>

<a href="view_all_products.php"><button class="btn btn-lg btn-primary" style="padding-left: 20px; margin-left: 20px">View products</button></a>
<br><br><br>

<a href="view_all_orders.php"><button class="btn btn-primary btn-lg" style="padding-left: 20px; margin-left: 20px">View orders</button></a>
<br><br><br>

<?php
	include_once 'includes/footer2.php';
	
	?>