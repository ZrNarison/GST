<?php require_once("centre.php");
	$req_li="SELECT DISTINCT N_box as jirabox FROM jiram  order by idjirm";
	$req_l=$pdo->prepare($req_li);
	$req_l->execute();while($et_jiram=$req_l->fetch());

	$req="SELECT DISTINCT num_box FROM Client Where num_box <>'".($et_jiram['jirabox'])."'";
	$liaison=$pdo->prepare($req);
	$liaison->execute();

?>
<div class="col-md-12 col-xs-12 spacer">
	<div class="panel panel-info">
		<div class="panel-heading"><h3>Nouveau Facture<h6>Eléctricité et Sécurité</h6></h3></div>
			<div class="panel-body">
			<!--a href="listClient.php" id="electricite"  class="form-inline my-2 my-sm-0" type="submit">Liste des Client</a-->
				<form method="post" id="formJirama" action="Save_jiram.php" enctype="multipart/form-data">
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">N° BOX :</label>
							<select name="num_bo" class="form-control text-center" id="num_box">
								<option value="" disabled selected>---BOX !---</option>
								<?php while($et=$liaison->fetch()) {;echo "<option value='".($et['num_box'])."'>".utf8_encode($et['num_box'])."</option>" ;};?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Date de pres-levement :</label>
							<!--select name="datepcpt" class="form-control text-center">
								<option value=""disabled selected>---Date !---</option>
								<?php /*$reqdate="SELECT max(datef_fact) FROM jiram Where num_box ='".($_GET["num_bo"])."'";	$reqliaison=$pdo->prepare($reqdate);$reqliaison->execute();while($etreq=$reqliaison->fetch()) {;echo "<option value='".($etreq['datef_fact'])."'>".utf8_encode($etreq['datef_fact'])."</option>" ;};*/?>
							</select><input type="submit" name=""-->
							<input type="date" name="datepcpt" class="form-control text-center">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Nouvel index :</label>
							<input type="text" name="v_ant" class="form-control text-center" placeholder="nouveau valeur" id="v_ant">
							<!--input type="hidden" name="n_val" class="form-control text-center" placeholder="Ancien valeur" id="n_val"-->
						</div>
					</div>
					<div class="form-group ">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Date de relevement :</label>
							<input type="date" name="datecpt" class="form-control text-center" id="datecpt" style="margin-left: 20px">
						</div>
					</div>
					<!--?php require("calc_jrm.php"); ?-->
					<!--div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Nom du client :</label>
							<input type="text" name="nomcpt" class="form-control text-center" placeholder="Nom du client" id="nomcpt">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Prénom :</label>
							<input type="text" name="precpt" class="form-control text-center" placeholder="prenom du client" id="pr_fac">
						</div>
					</div-->
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Somme versé :</label>
						 	<input type="text" name="sommecpt" class="form-control text-center" placeholder="money" id="sommecpt">
						 </div>
					</div>
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</form>
			</div>
	</div>
</div>