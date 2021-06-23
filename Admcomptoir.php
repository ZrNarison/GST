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
						<?php require("Admlist.php");?>
					</div>
					<div class="col-sm-12 text-white" id="option">
						<?php require("Admuser.php");?>
					</div>
				</div>
			</nav>
			<div class="container spacer col-md-8 col-xs-5 col-md-offset-5" id="body-panel" >
				<?php /*require("ncompte.php");*/require("Admreq_box.php");?>
			</div>
		</div>
	</div>
</body>
</html>