<?php
session_start();

include_once 'dbcontroller.php';
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin"]) ){
    header("location: login/login_admin.php");
    exit;
}
include_once 'includes/header2.php';
?>
<?php
if (isset($_GET['id'])) {
	$id=$_GET['id'];


if (isset($_POST['add_products'])) {
	$name=$_POST['name'];
	$code=$_POST['code'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$quantity=$_POST['quantity'];
	$company=$_POST['company'];
	$details=$_POST['details'];
	$description=$_POST['description'];
	
	 

     $sql="UPDATE `tblproduct` SET `name`=:name,`code`=:code,`price`=:price,`category`=:category,`quantity`=:quantity,`company`=:company,`details`=:details,`description`=:description where `id`=:id ";
     

     

     if ($stmt=$conn->prepare($sql)) {
     	$stmt->execute(array(
     		':id' =>$id,
     		':name' =>$name ,
     		':code' => $code,
     		':price' => $price,
     		':category' =>$category ,
     		':quantity' => $quantity,
     		':company' => $company,
     		':details' => $details,
     		':description' => $description
     		
     		 ));
     	header('location:admin/index.php');
     }

     
      

}


$result=$conn->query("SELECT * FROM tblproduct WHERE id='$id' ");

        	while($product_array=$result->fetch()){


	// if (!empty($product_array)) { 
	// 	foreach($product_array as $key=>$value){
	echo '
<div class="col-md-9">		
<form action="try.php" method="post" enctype="multipart/form-data" >

	<div class="form-group ">
	<label>Product name</label>
		<input class="input" type="text" name="name" value="'. $product_array["name"].'" placeholder="name of product" >
	</div>
	
	<div class="form-group">
	<label>product code</label>
		<input class="input" type="text" name="code" value="'. $product_array["code"].'" placeholder="Product unique code " >
	</div>
	
	
	
	<div class="form-group">
	<label>product price</label>
		<input class="input" type="number" name="price" value="'. $product_array["price"].'" placeholder="Product price" >
	</div>
	
	<div class="form-group">
	<label>product category</label>
		<input class="input" type="number" name="category" value="'. $product_array["category"].'" placeholder="product category" >
	</div>

	<div class="form-group">
	<label>product quantity</label>
		<input class="input" type="number" name="quantity" value="'. $product_array["quantity"].'" placeholder="quantity of product in stock" >
	</div>
	

	<div class="form-group">
	<label>Brand company name</label>
		<input class="input" type="text" name="company" value="'. $product_array["company"].'" placeholder="product brand Company" >
	</div>
	
	<div class="form-group">
	<label>product details</label>
		<textarea class="input" name="details" placeholder="details of the product" cols="70" rows="50" >
			'. $product_array["details"].'
		</textarea>		
	</div>
	<div class="form-group">
	<label>product description</label>
		<textarea class="input" name="description" placeholder="description of the product" cols="70" rows="50" >
			'. $product_array["description"].'
		</textarea>		
	</div>

	<div class="form-group">
	<input class="primary-btn order-submit" type="submit" name="add_products"  value="Edit product">
	</div>
	
	
</form>
</div>

	';
}
}
?>



<?php
include_once 'includes/footer.php';
?>
