<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brands</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <?php
                                    $row1 = $data['listbr'];
                                    for ($i = 0;$i<count($row1);$i++){
                                        echo '<a class="dropdown-item" href="'.BASE_URL.'/ProductController/Products?brand='.$row1[$i]['id'].'">'.$row1[$i]['name'].'</a></br>';
                                    }
                                ?>
                            </div>
                        </li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>