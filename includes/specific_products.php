




<?php
$product_array="";
if (isset($_GET['category'])) {

	$category=$_GET['category'];
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE category = '$category' ");
}
elseif (isset($_GET['min'])) {

	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct LIMIT 10 ");

}
else{
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC ");

}
	

	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
	<!-- product -->
	<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="<?php echo $product_array[$key]["image"]; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $product_array[$key]["company"]; ?></p>
										<h3 class="product-name"><a href="#"><?php echo $product_array[$key]["name"]; ?></a></h3>
										<h4 class="product-price"><?php echo "$".$product_array[$key]["price"]; ?> <del class="product-old-price">$990.00</del></h4>
										<input type="hidden"  name="quantity" value="1" size="2" />
										<div class="product-rating">
										</div>
										
										<div class="product-btns">
											<a href="product.php?code=<?php echo $product_array[$key]["code"]; ?>" class="primary-btn order-submit">Quick view</a>
										</div>
									</div>
									<div class="add-to-cart">
										<!-- <input type="submit" value="Add to Cart" class="btnAddAction" /> -->

										<button type="submit" value="Add to Cart" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
</form>
							<!-- /product -->

							<?php
		}
	}
	?>	
