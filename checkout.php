<?php
// Initialize the session
session_start();

$my_total_price=0;

// print_r($_SESSION["cart_item"]);

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/login_home.php");
    exit;
}
include_once 'includes/header.php';

$id=$_SESSION["id"] ;


?>


<?php



if (isset($_POST['add_info'])) {
	$sql=$conn->prepare("UPDATE `users` SET `first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`email`='".$_POST['email']."',`address`='".$_POST['address']."',`city`='".$_POST['city']."',`county`='".$_POST['county']."',`country`='".$_POST['country']."',`telephone`='".$_POST['telephone']."'
		where `id`='$id'");
	$result=$sql->execute();
	
	
}


//header

?>

<?php
// if(!empty($_POST["add_record"])) {
// 	require_once("db.php");
// 	$sql = "INSERT INTO posts ( post_title, description, post_at ) VALUES ( :post_title, :description, :post_at )";
// 	$pdo_statement = $pdo_conn->prepare( $sql );
		
// 	$result = $pdo_statement->execute( array( ':post_title'=>$_POST['post_title'], ':description'=>$_POST['description'], ':post_at'=>$_POST['post_at'] ) );
// 	if (!empty($result) ){
// 	  header('location:index.php');
// 	}
// }
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script type="text/javascript">
	function sweet()
{
	Swal.fire({
  title: '<strong>HTML <u>example</u></strong>',
  type: 'info',
  html:
    'You can use <b>bold text</b>, ' +
    '<a href="//github.com">links</a> ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class="fa fa-thumbs-up"></i> Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '<i class="fa fa-thumbs-down"></i>',
  cancelButtonAriaLabel: 'Thumbs down',
})
}

</script>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Additional personal</h3>
							</div>
							<form action="checkout.php" method="post">
							<div class="form-group">
								<input class="input" type="text" name="first_name" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last_name" placeholder="Last Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="county" placeholder="county" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" required>
							</div>
							
							<div class="form-group">
								<input class="input" type="tel" name="telephone" placeholder="Telephone" required>
							</div>
							<div class="form-group">
								<input class="primary-btn order-submit" type="submit" name="add_info" placeholder="Submit _info" value="Additional information">
							</div>
							
							</form>
						</div>
						</div>
						<!-- /Billing Details -->
						<form action="checkout.php" method="post">
						<!-- Shiping Details -->
						<div class="col-md-7">
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shipping address</h3>
							</div>	
													
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>	
								</div>
								</div>
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					<!-- </div> -->

					<!-- Order Details -->

						<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
							

								<?php
								if(isset($_SESSION["cart_item"])){
								    $total_quantity = 0;
								    $total_price = 0;
								?>
								<?php		
								    foreach ($_SESSION["cart_item"] as $item){
								        $item_price = $item["quantity"]*$item["price"];
										?>
										<div class="order-col">
																	<div><?php echo $item["quantity"]; ?>x <?php echo $item["name"]; ?></div>
																	<div><?php echo "$ ". number_format($item_price,2); ?></div>
																</div>
												
												<?php
												$total_quantity += $item["quantity"];
												$total_price += ($item["price"]*$item["quantity"]);
												$my_total_price=$total_price;
										}
										?>



																
															</div>
															<div class="order-col">
																<div>Shiping</div>
																<div><strong>FREE</strong></div>
															</div>
															<div class="order-col">
																<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo "$ ".number_format($total_price, 2); ?></strong></div>
										
								  <?php
								} else {
								?>
								<div class="no-records">Your Cart is Empty</div>
								<?php 
								}
								?>
							
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment_mode" id="payment-1" required="required" >
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment_mode" id="payment-2" required="required" >
								<label for="payment-2">
									<span></span>
									Mpesa Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment_mode" id="payment-3" required="required" >
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						
						<div class="form-group">
										<input class="primary-btn order-submit" type="submit" name="payment" placeholder="Place order" value="Place order">
									</div>
					</div>

					</form>	
					
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?php
//header
include_once 'includes/footer.php';

?>


<?php


$order_code = uniqid('order'); 


if(isset($_POST['payment'])){

    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
	 	$item["quantity"]; 
	 	$item["name"];
	 	number_format($item_price,2); 
		$total_quantity += $item["quantity"];
		$total_price += ($item["price"]*$item["quantity"]);
		

		$stmt="INSERT INTO `orders`( `order_id`, `quantity`, `name`) VALUES (:order_id,:quantity,:name)";
		$pdo_stmt=$conn->prepare($stmt);
		$res=$pdo_stmt->execute(array(
				':order_id'=>$order_code,				
				':quantity'=>$item["quantity"],
				':name'=>$item["name"]
				
		));		

		}


		$add="INSERT INTO `all_orders`( `user_id`, `order_code`, `payment`, `address`, `city`, `country`,`total`)	VALUES ( :user_id,:order_code,:payment,:address,:city,:country,:total)";
		$pdo_add=$conn->prepare( $add );
		$res_add=$pdo_add->execute(array(
				':user_id'=>$id,
				':order_code'=>$order_code,
				':payment'=>$_POST['payment_mode'],
				':address'=>$_POST['address'],
				':city'=>$_POST['city'],
				':country'=>$_POST['country'],
				':total'=>$my_total_price
		));
		// echo '<script>alert("Thank you for shopping with us!!");</script>';
		echo "<script >Swal.fire({
  
  type: 'success',
  title: 'Thank you for shopping with us',
  text: 'Your purchase is succesfull',
  showConfirmButton: true
}).then(function() {
    window.location.href = 'login/logout.php';
});</script>";
		header('location:login/logout.php');
		 
} 






?>

