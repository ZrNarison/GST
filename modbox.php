<?php
require_once('centre.php');
$box=$_GET['num_box'];
$ps=$pdo->prepare("SELECT * FROM piece WHERE N_box=?");
$params=array($box);
$ps->execute($params);
$reqbox=$ps->fetch();
?>
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
			<div class="container spacer col-md-8 col-xs-5 col-md-offset-5" id="body-panel" >
            <div class="container spacer col-sm-1 col-md-12 col-xs-4 col-md-offset-8">
                <div class="panel panel-info">
                    <div class="panel-heading navbar-dark"><h3>Modifier BOX</h3></div>
                        <div class="panel-body panel-body col-md-4">
                            <form method="post" action="Save_boxmod.php" enctype="multipart/form-data" id="editbox">
                                <div class="form-group">
                                    <label class="control-label" >N° BOX : </label>
                                    <input type="text" name="num_box" value="<?php echo("$box")?>" class="form-control text-center"id="numero_box" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Logement :</label>
                                    <input type="text" name="loge" class="form-control text-center" value="<?php echo($reqbox['hofa'])?>" id="loge">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Sécurité :</label>
                                    <input type="text" name="sec" class="form-control text-center" value="<?php echo($reqbox['securite'])?>" id="securt">
                                </div>
                                <!--div class="form-group">
                                    <div class="form-inline mr-sm-2">
                                        <label class="control-label">Long :</label>
                                        <input type="text" name="lon" class="form-control text-center" value="<?php echo($reqbox['longueur'])?>" id="lng" >
                                        <label class="control-label">Larg :</label>
                                        <input type="text" name="lar" class="form-control text-center" value="<?php echo($reqbox['largeur'])?>"id="lrg">
                                    </div>
                                </div-->
                                <div  class="row col-sm-3">
                                    <button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >VALIDER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</body>
</html>