<div class="container spacer col-md-12 col-xs-12 col-md-offset-3">
	<div class="panel panel-info">
		<div class="panel-heading navbar-dark"><h3>MODIFICATION DU PARAMETTRE</h3></div>
			<div class="panel-body col-md-8">
				<form method="POST" action="Save_newparam.php">
					<div class="form-group">
						<label class="control-label">Nom de l'application :</label>
						<input type="text" name="nomapp" class="form-control" value="<?php echo($reqpar['nom_appli'])?>" id="nomappli" >
					</div>
					<div class="form-group">
						<label class="control-label">Société :</label>
						<input type="text" name="soc" class="form-control" value="<?php echo($reqpar['societe'])?>" id="societe">
					</div>
					<div class="form-group">
						<label class="control-label">Representant :</label>
						<input type="text" name="repre" class="form-control" value="<?php echo($reqpar['representant'])?>" id="Representant">	
					</div>
					<div class="form-group">
						<label class="control-label">Localisation :</label>
						<input type="text" name="loca" class="form-control" value="<?php echo($reqpar['localisation'])?>"id="Localisation">
					</div>
					<div class="form-group">
						<!--div class="form-inline mr-sm-2"-->
							<label class="control-label">Adress :</label>
							<input type="text" name="adSoc" class="form-control" value="<?php echo($reqpar['adress_soc'])?>" id="adressoc">
						<!--/div-->
					</div>
					<div class="form-group">
						<!--div class="form-inline mr-sm-2"-->
							<label class="control-label">Responsable :</label>
							<input type="text" name="respo" class="form-control" value="<?php echo($reqpar['respo_soc'])?>" id="respoonsable">
						<!--/div-->
					</div>
					<div class="form-group">
						<!--div class="form-inline mr-sm-2"-->
							<label class="control-label">Adress du responsable :</label>
							<input type="text" name="adreResp" class="form-control" value="<?php echo($reqpar['adress_respo'])?>"id="adrespsoc">
						<!--/div-->
					</div>
					<div class="form-group">
						<!--div class="form-inline mr-sm-2"-->
							<label class="control-label">Entete :</label>
							<input type="text" name="enten" class="form-control" value="<?php echo($reqpar['entete'])?>" id="entente">
						<!--/div-->
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Cout d'éléctricité :</label>
							<input type="text" name="cou" class="form-control" id="cout" value="<?php echo($reqpar['kwt'])?>">
						</div>
					</div>
					<div class="form-group">
						<!--div class="form-inline mr-sm-2"-->
							<label class="control-label">Corps du menu :</label>
							<textarea class="form-control" id="corpmenu" name="corpmenu"  value="<?php echo($reqpar['corps_menu'])?>" placeholder="Le corps de votre menu ici !"></textarea>
						<!--/div-->
					</div>
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >VALIDER</button>
					</div>
				</form>
			</div>
	</div>
</div>