
<?php

	
	
if (isset($_GET['code'])) {
	$code=$_GET['code'];									

	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct where code='$code' ");
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
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $product_array[$key]["name"]; ?></a></h3>
										<h4 class="product-price"><?php echo "$".$product_array[$key]["price"]; ?> <del class="product-old-price">$990.00</del></h4>
										<input type="hidden"  name="quantity" value="1" size="2" />
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<!-- <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
											<button href="product.php" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>view</button>
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
	}	
	?>	
