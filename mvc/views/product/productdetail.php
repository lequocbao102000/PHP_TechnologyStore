<?php
    $row = $data['product'];
?>
</br></br>
<div class="container" style="color:white">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?php echo BASE_URL;?>/uploads/<?php echo $row[0]['image'];?>" alt="">
							</div>

						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?php echo BASE_URL;?>/uploads/<?php echo $row[0]['image'];?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo BASE_URL;?>/uploads/<?php echo $row[0]['image'];?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo BASE_URL;?>/uploads/<?php echo $row[0]['image'];?>" alt="">
							</div>

						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 style="color:white" class="product-name"><?php echo $row[0]['name'];?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								
							</div>
							<div>
								<h3 class="product-price"><?php echo $row[0]['price'];?> $ </h3>
								<span class="product-available">In Stock</span>
							</div>
							<p><?php echo $row[0]['description'];?></p>

                            </br></br></br>
                            <form action="" method="POST">
                                <div class="add-to-cart">
                                    <input type="number" value="1" min="1" max="<?php echo $row[0]['stock'];?>" style="color:black;height:30px;font-size:20px" name="qty"> 
                                    
                                    <button style="margin-left:50px" class="add-to-cart-btn" name="btnaddcart"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </form>


						</div>
					</div>
					<!-- /Product details -->

				</div>
				<!-- /row -->
			</div>