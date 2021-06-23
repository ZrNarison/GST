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
<div id="circuit">
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
				<?php require("jiram.php");require("req_jiram.php");?>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$("#circuit").ready(function(){
		$(".btnEdit").modal("show");
		$tr=$(this).closes('tr');
		var data = $tr.children("td").map(function(){
			return $(this).text();
		}).get();
		console.log(data);
		$("#update_id").val(data[0]);
		$("#fname").val(data[1]);
		$("#lname").val(data[2]);
		$("#course").val(data[3]);
		$("#update_id").val(data[4]);
		$("#update_id").val(data[5]);
	})
</script>
</html>