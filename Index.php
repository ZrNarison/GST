<?php require ("connexion.php");?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" lang="fr">
		<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/jquery-validate.js"></script>
	</head>
	<body>
		<div class="container spacer col-md-4 col-xs-12 col-md-offset-3 bg-dark rounded"  id="login">
        	<!--img src="img/DSC_0103.JPG" id="photologin"/><img src="img/DSC_0103.JPG" id="photologin"/-->
				<div class="panel-heading panel-body">
					<form method="post" action="validate.php" id="formlogin">
						<div class="form-group">
							<label class="control-label text-white">Utilisateur:</label>
							<select name="use" id="user" class="form-control text-center">
								<option value="" disabled selected>---Séléctionner une compte---</option>
								<?php while($my_li=$my_req->fetch()) {;echo "<option value='".($my_li['crt'])."'>".utf8_encode($my_li['user'])."</option>" ;};?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label text-white">Mot de pass:</label>
							<input type="password" name="password" class="form-control text-center" id="password" placeholder="Veuillez entrer mot de pass" />
						</div>
						<div class="form-group">
							<input type="checkbox" name="checkbox" id="checkbox"/>
							<label class="text-white">Afficher le mot de pass</label>
						</div>
						<div>
							<button type="submit" id="btn-site" class="btn btn-success">Connexion</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>