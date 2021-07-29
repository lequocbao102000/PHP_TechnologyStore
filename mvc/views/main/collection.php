<?php 
        require_once ("./mvc/core/Config.php");
         
		?>
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<?php
						$row = $data['listbr'];
						for ($i=0;$i<count($row);$i++){
							echo '<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="'.BASE_URL.'/public/img/shop01.png" alt="">
								</div>
								<div class="shop-body">
									<h3>'.$row[$i]['name'].'<br>Collection</h3>
									<a href="'.BASE_URL.'/ProductController/Products?brand='.$row[$i]['id'].'" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>';
						}
					?>
					
					<!-- /shop -->
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>