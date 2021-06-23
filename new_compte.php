<div class="container spacer col-md-12 col-xs-12 col-md-offset-3">
	<div class="panel panel-info">
		<div class="panel-heading navbar-dark"><h3>Nouveau Compte</h3></div>
			<div class="panel-body col-md-8">
				<form method="post" action="Save_newcompte.php" enctype="multipart/form-data" id="formnewcompte">
					<div class="label-floating">
						<label class="control-label">Class :</label>
						<select class="form-control" name="crtcpt" id="class" style="width: 193px">
							<option value="Administrateur">Administrateur</option>
							<option value="Secretaire">Secrétaire</option>
						</select>
					</div>
					<div class="label-floating">
						<label class="control-label">Nouveau nom :</label>
						<input type="text" name="nom_c" class="form-control" placeholder="Nouveau nom" id="nom_c"/>
					</div>
					<div class="form-group">
						<label class="control-label">Mot de pass :</label>
						<input type="password" name="mdp" class="form-control" placeholder="Mot de pass" id="mdps" />
					</div>
					<div class="form-group">
						<label class="control-label">Confirmation mot de pass :</label>
						<input type="password" name="cmdp" class="form-control" placeholder="Code de confirmation" id="cmdp" />
					</div>
					<div class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</form>
			</div>
	</div>
</div>