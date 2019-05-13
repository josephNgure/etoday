<?php
session_start();
include_once 'dbcontroller.php';
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin"]) ){
    header("location: login/login_admin.php");
    exit;
}
include_once 'includes/header.php';
?>
<?php
if (isset($_POST['add_products'])) {
	$name=$_POST['name'];
	$code=$_POST['code'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$quantity=$_POST['quantity'];
	$company=$_POST['company'];
	$details=$_POST['details'];
	$description=$_POST['description'];
	
	 $image_tmp=$_FILES['image']['tmp_name'];
     $image_name=$_FILES['image']['name'];
     $image_path='product-images/'.$image_name;
     move_uploaded_file($image_tmp, $image_path);
     

     $image1_tmp=$_FILES['image1']['tmp_name'];
     $image1_name=$_FILES['image1']['name'];
     $image1_path='product-images/'.$image1_name;
     move_uploaded_file($image1_tmp, $image1_path);    


     $image2_tmp=$_FILES['image2']['tmp_name'];
     $image2_name=$_FILES['image2']['name'];
     $image2_path='product-images/'.$image2_name;
     move_uploaded_file($image2_tmp, $image2_path);    


     $image3_tmp=$_FILES['image3']['tmp_name'];
     $image3_name=$_FILES['image3']['name'];
     $image3_path='product-images/'.$image3_name;
     move_uploaded_file($image3_tmp, $image3_path);    


     $image4_tmp=$_FILES['image4']['tmp_name'];
     $image4_name=$_FILES['image4']['name'];
     $image4_path='product-images/'.$image4_name;
     move_uploaded_file($image4_tmp, $image4_path);
     



     $sql="INSERT INTO `tblproduct`( `name`, `code`, `image`, `price`, `category`, `quantity`, `company`, `details`, `description`, `image1`, `image2`, `image3`, `image4`) VALUES (:name,:code,:image,:price,:category,:quantity,:company,:details,:description,:image1,:image2,:image3,:image4)";

     if ($stmt=$conn->prepare($sql)) {
     	$stmt->execute(array(
     		':name' =>$name ,
     		':code' => $code,
     		':image' => $image_name,
     		':price' => $price,
     		':category' =>$category ,
     		':quantity' => $quantity,
     		':company' => $company,
     		':details' => $details,
     		':description' => $description,
     		':image1' => $image1_name,
     		':image2' => $image2_name,
     		':image3' => $image3_name,
     		':image4' => $image4_name
     		 ));
     	header('location:home.php');
     }

     
      

}
?>
<div class="col-md-7">
<form action="try.php" method="post" enctype="multipart/form-data" >

	<div class="form-group">
		<input class="input" type="text" name="name" placeholder="name of product" required>
	</div>
	
	<div class="form-group">
		<input class="input" type="text" name="code" placeholder="Product unique code " required>
	</div>
	
	<div class="form-group">
		<input class="input" type="file" name="image" placeholder="product image" required>
	</div>
	
	<div class="form-group">
		<input class="input" type="number" name="price" placeholder="Product price" required>
	</div>
	
	<div class="form-group">
		<input class="input" type="number" name="category" placeholder="product category" required>
	</div>

	<div class="form-group">
		<input class="input" type="number" name="quantity" placeholder="quantity of product in stock" required>
	</div>
	

	<div class="form-group">
		<input class="input" type="text" name="company" placeholder="product brand Company" required>
	</div>
	
	<div class="form-group">
		<textarea class="input" name="details" placeholder="details of the product" cols="70" rows="50" required></textarea>		
	</div>
	<div class="form-group">
		<textarea class="input" name="description" placeholder="description of the product" cols="70" rows="50" required></textarea>		
	</div>

	<div class="form-group">
		<input class="input" type="file" name="image1" placeholder="Additional imges of product" required>
	</div>
	<div class="form-group">
		<input class="input" type="file" name="image2" placeholder="Additional imges of product" required>
	</div>
	<div class="form-group">
		<input class="input" type="file" name="image3" placeholder="Additional imges of product" required>
	</div>
	<div class="form-group">
		<input class="input" type="file" name="image4" placeholder="Additional imges of product" required>
	</div>
	<div class="form-group">
	<input class="primary-btn order-submit" type="submit" name="add_products"  value="Add product">
	</div>
	
	
</form>
</div>

<?php
include_once 'includes/footer.php';
?>
