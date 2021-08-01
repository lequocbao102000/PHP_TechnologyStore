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
			<!-- đợi xí nháokkkk -->
		
    </head>
	<body>
		<!-- HEADER -->
		<?php require_once("./mvc/views/main/header.php"); ?>
		<!-- /HEADER -->

        
        <!-- BODY-->
        <?php
            if (count($data['historyreceipt'])==0){
                require_once("./mvc/views/user/user_empty.php");
            }
            else{
                require_once("./mvc/views/user/user_1.php");
            }
        ?>
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
