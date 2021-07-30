<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +(84)70-3456-682</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> lequocbao102000@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> HCM City</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<?php if (isset($_SESSION['name'])){
							echo '<li><a href=""><i class="fa fa-user-o"></i>'.$_SESSION['name'].'</a></li>';
							echo '<a href="'.BASE_URL.'/AccountController/Logout/"> Click here to logout</a></li>';
						}
						else{
							echo '<li><a href="'.BASE_URL.'/AccountController/Login/"><i class="fa fa-user-o"></i> My account</a></li>';
						}
						?>
						
			
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?php echo BASE_URL;?>" class="logo">
									<img src="<?php echo BASE_URL?>/public/img/logostore.png" style="width:120px" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div>
									<a href="<?php echo BASE_URL;?>/CartController/">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<?php
										 if (empty($_SESSION['cart']) || $_SESSION['cart']==null){
											 $qtycart = 0;
										 }
										 else{
											 $qtycart = count($_SESSION['cart']);
										 }
										?>
										<div class="qty"><?php echo $qtycart;?></div>
									</a>
									
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>