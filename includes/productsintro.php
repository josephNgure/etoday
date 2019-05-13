<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
		<?php
        try{
        	
        	$result=$conn->query($products_intro);
        	while ($row=$result->fetch()) {

        		echo '
        			<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/'.$row['images'].'" alt="" height="300px">
							</div>
							<div class="shop-body">
								<h3>'.$row['name'].'<br>Collection</h3>
								<a href="store.php?category='.$row['id'].'" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

        		';
        	}
        	  unset($result);
        }
        catch(PDOException $e){
    	die("ERROR: Could not able to execute $products_intro. " . $e->getMessage());
		}   
        ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->





        