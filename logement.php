<?php require_once("centre.php");
$req_li="SELECT DISTINCT caution_box as logbox FROM hofa  order by idhofa";
$req_l=$pdo->prepare($req_li);
$req_l->execute();while($et_log=$req_l->fetch());

$req="SELECT DISTINCT num_box FROM Client WHERE num_box <>'".($et_log['logbox'])."'";
$liaison=$pdo->prepare($req);
$liaison->execute();?>
<div class="container spacer col-sm-1 col-md-12 col-xs-4 col-md-offset-8">
	<div class="panel panel-info">
		<div class="panel-heading navbar-dark"><h3>Nouveau hofatrano</h3></div>
			<div class="panel-body">
				<form method="post" action="Save_log.php" enctype="multipart/form-data" id="hofatrano">
					<div class="form-group">
						<label class="control-label">N° BOX :</label>
						<select name="num_bo" class="form-control text-center" style="width: 15%;">
							<option value="" disabled selected>---BOX !---</option>
                            <?php while($et=$liaison->fetch()) {;echo "<option value='".($et['num_box'])."'>".utf8_encode($et['num_box'])."</option>" ;};?>
                        </select>
					</div>
					<div class="form-group">
						<label class="control-label">Date de paye :</label>
						<input type="date" name="d_pres" class="form-control text-center" placeholder="Entrer tarif du logement" style="width: 18%">
					</div>
					<div class="form-group">
						<label class="control-label">Personne à versé :</label>
						<div class="form-inline mr-sm-2">
							<input type="text" name="nom_ver" class="form-control text-center" placeholder="Nom du personne" style="width: 56%">
							<input type="text" name="pre_ver" class="form-control text-center" placeholder="Prénom du personne" style="width: 40%">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Somme à versé :</label>
						<input type="text" name="somme_ver" class="form-control text-center" placeholder="Somme versé" style="width: 22%">
					</div>
					<!--div class="form-group">
						<label class="control-label">Sécurité :</label>
						<input type="text" name="sec" class="form-control text-center" placeholder="Entrer salaire du Sécurité" style="width: 22%">
					</div-->
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</form>
			</div>
	</div>
</div>