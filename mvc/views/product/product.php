<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
                            <?php
                                $row = $data['listbr'];
                                for ($i=0;$i<count($row);$i++){
                                    echo '<div>
                                            <a class="input-checkbox" href="?brand='.$row[$i]['id'].'">
                                            <label>
                                                <span></span>
                                                '.$row[$i]['name'].'
                                                <small>(available)</small>
                                            </label>
                                            </a>
                                        </div>';
                                }
                            ?>
								

							</div>
						</div>
						<!-- /aside Widget -->


					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
								$row = $data['listproduct'];
								for ($i=0;$i<count($row);$i++){
									echo '<div class="col-md-4 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="'.BASE_URL.'/uploads/'.$row[$i]['image'].'" style="width:100%;height:260px" alt="">
											<div class="product-label">
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<h3 class="product-name"><a href="#">'.$row[$i]['name'].'</a></h3>
											<h4 class="product-price">'.$row[$i]['price'].'$</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>												
												<button  class="quick-view">
													<a href="'.BASE_URL.'/ProductController/Detail?idproduct='.$row[$i]['id'].'"><i class="fa fa-eye"></i></a>
													<span class="tooltipp">Detail</span>
												</button>
												
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								</div>';
								}
							?>
							
							
							<!-- /product -->

						<!-- /store products -->

						<!-- store bottom filter -->
						<!-- <div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div> -->
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>