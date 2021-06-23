<?php require ("connexion.php"); ?>
<div class="container spacer col-md-12 col-xs-12 col-md-offset-3">
	<div class="panel panel-info">
		<div class="panel-heading navbar-dark"><h3>Modifier Compte</h3></div>
			<div class="panel-body col-md-8"style="float:left">
				<form method="post" action="Save_editcompte.php" enctype="multipart/form-data" id="formEditCompte">
					<div class="form-group">
						<label class="control-label">Ancien nom :</label>
						<select name="ancinom" id="anc_nom" class="form-control text-center">
								<option value="" disabled selected>---Séléctionner une user---</option>
								<?php while($my_li=$my_req->fetch()) {;echo "<option value='".($my_li['user'])."'>".utf8_encode($my_li['user'])."</option>" ;};?>
							</select>
					</div>
					<div class="form-group">
						<label class="control-label">Ancien mot de pass :</label>
						<input type="password" name="anmdps" class="form-control" id="nouv_code" />
					</div>
					<div class="form-group">
						<label class="control-label">Nouveau nom :</label>
						<input type="text" name="nouvnom" class="form-control" id="anc_code" />
					</div>
					<div class="form-group">
						<label class="control-label">Nouveau mot de pass :</label>
						<input type="password" name="modps" class="form-control" id="ncode" />
					</div>
					<div class="form-group">
						<label class="control-label">Confirmation mot de pass :</label>
						<input type="password" name="comdps" class="form-control" id="confir_code" />
					</div>
					<div class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</form>
			</div>
			<form class="form-inline" style="margin-top: 10px">
				<a href="Admnouveau_compte.php" id="nouveau_compte"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Créer compte</a>
			</form>
	</div>
</div>