<?php?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Technology Store</title>
        <?php require_once("./mvc/views/css.php"); ?>
		
		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
			
		
    </head>
	<body>
		<!-- HEADER -->
		<?php require_once("./mvc/views/main/header.php"); ?>
		<!-- /HEADER -->

		
        
        <!-- BODY-->
        <div class="container">
				<!-- row -->
                <form action="<?php echo BASE_URL;?>/PaymentController/Payment" method="POST">
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
				
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Stress">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="district" placeholder="District">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							
							
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea  class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
                    </br></br>
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
                                $row = $_SESSION['cart'];
                                $i = 0;
                                $total = 0;                
                                foreach ($row as $product){
                                    echo '<div class="order-col">
									        <div>'.$product['qty'].'x '.$product[$i]['name'].'</div>
									        <div>$'.$product[$i]['price']*$product['qty'].'</div>
								        </div>';
                                        $total+=$product[$i]['price']*$product['qty'];
                                }   
                                ?>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo $total;?>$</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<button name="btnpay" style="width:430px" class="primary-btn order-submit">Place order</button>
					</div>
					<!-- /Order Details -->
				</div>
                </form>
				<!-- /row -->
			</div>
			<!-- /container -->
        <!-- /BODY-->

		<!-- NEWSLETTER -->
		<?php require_once("./mvc/views/main/newsletter.php"); ?>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<?php require_once("./mvc/views/main/footer.php"); ?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<?php require_once("./mvc/views/jquery.php"); ?>

	</body>
</html>
