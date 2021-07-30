<?php
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>BaoBoiStore-Account</title>
        <?php require_once("./mvc/views/css.php"); ?>
		

    </head>
	<body style="background:#383636">
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +(84)70-3456-682</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> lequocbao102000@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> HCM City</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->
		</header>
		<!-- /HEADER -->
		<div>
			<a href="<?php echo BASE_URL?>/" class="logo">
				<img src="<?php echo BASE_URL?>/public/img/logostore.png" style="width:120px" alt="">
			</a>
		</div>
		
        
        <!-- BODY-->
		<?php require_once("./mvc/views/account/".$data["account"].".php")?>
        <!-- /BODY-->
		
		
		<!-- FOOTER -->
		
		<!-- /FOOTER -->
        <?php require_once("./mvc/views/main/footer.php"); ?>
		<!-- jQuery Plugins -->
		<?php require_once("./mvc/views/jquery.php"); ?>

	</body>
</html>
