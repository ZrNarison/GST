<!DOCTYPE html>
<html>
<head>
	<title>TSENA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/jquery-validate.js"></script>
</head>
<body>
<div class="">
		<div class="panel-info bg-light"><?php require("en_tete.php");?></div>
		<div class="spacer panel-info panel-body body" id="body">
			<nav class="panel-info bg-light"><h1 class="text-center">MENU</h1>
				<div class="col-md-12" id="menu">
					<div class="col-sm-12" id="menu_list">
						<?php require("list.php");?>
					</div>
					<div class="col-sm-12 text-white" id="option">
						<?php require("user.php");?>
					</div>
				</div>
			</nav>
			<div class="container spacer col-md-8 col-xs-3 col-md-offset-5" id="body-panel">
				<?php require("modifi_client.php");/*require("req_client.php");*/?>
			</div>
		</div>
	</div>
</body>
</html>
