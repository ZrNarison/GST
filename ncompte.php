<div class="container spacer col-sm-1 col-md-12 col-xs-4 col-md-offset-8"-->
	<div class="panel panel-info">
		<div class="panel-heading navbar-dark"><h3>Nouveau BOX</h3></div>
			<div class="panel-body panel-body col-md-4">
				<form method="post" action="Save_box.php" enctype="multipart/form-data" id="formbox">
					<div class="form-group">
						<label class="control-label">N° BOX :</label>
						<input type="type" name="n_box" class="form-control text-center " placeholder="N°" id="numero_box">
					</div>
					<div class="form-group">
						<label class="control-label">Logement :</label>
						<input type="text" name="loge" class="form-control text-center" placeholder="Entrer tarif du logement" id="loge">
					</div>
					<div class="form-group">
						<label class="control-label">Sécurité :</label>
						<input type="text" name="sec" class="form-control text-center" placeholder="Entrer salaire du Sécurité" id="securt">
					</div>
					<div class="form-group">
						<label class="control-label">Emplacement :</label>
						<select name="emp" class="form-control">
							<option value="A l'etage">A l'étage</option>
							<option value="Rez de chaussee">Rez de chaussée</option>
						</select>
					</div>
					<!--div class="form-group">
						<label class="control-label">Longueur (m) :</label>
						<input type="text" name="lon" class="form-control text-center" placeholder="longueur" id="securt">
					</div>
					<div class="form-group">
						<label class="control-label">Largeur :</label>
						<input type="text" name="lar" class="form-control text-center" placeholder="largeur" id="securt">
					</div-->
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</form>
			</div>
	</div>
</div>