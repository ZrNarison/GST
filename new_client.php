<?php require_once("centre.php");$req_li="SELECT DISTINCT num_box as piece FROM Client  order by idclient";$req_l=$pdo->prepare($req_li);$req_l->execute();while($et_client=$req_l->fetch());$req="SELECT DISTINCT N_box FROM piece Where N_box <>'".($et_client['num_box'])."'";$liaison=$pdo->prepare($req);$liaison->execute();?>
<div class="col-md-12 col-xs-12 spacer">
	<div class="panel panel-info">
		<div class="panel-heading"><h3>Nouveau Client</h3></div>
			<div class="panel-body">
			<a href="listClient.php" id="electricite"  class="form-inline my-2 my-sm-0" type="submit">Liste des Client</a>
				<form method="post" id="formclient" action="Save_client.php" enctype="multipart/form-data">
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">N° BOX :</label>
							<select name="num_bo" class="form-control text-center" style="width: 15%;margin-left: 76px">
								<option value="" disabled selected>---BOX !---</option>
								<?php while($et=$liaison->fetch()) {;echo "<option value='".($et['N_box'])."'>".utf8_encode($et['N_box'])."</option>" ;};?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Nom :</label>
							<input type="text" name="nom_ver" class="form-control text-center" placeholder="Nom du personne" style="width: 60%;margin-left: 96px">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Prénom :</label>
							<input type="text" name="pre_ver" class="form-control text-center" placeholder="Prénom du personne" style="width: 60%;margin-left: 76px">
						</div>
					</div>
					<div class="form-group ">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Né (e) le :</label>
							<input type="date" name="date_nais" class="form-control text-center" id="date_nais">
							<label class="control-label"> à :</label>
							<input type="text" name="lieu_nais" class="form-control text-center" placeholder="Lieu de naissance">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2"-->
							<label>CIN</label>
							<input type="text" name="cin" id="cin" class="form-control text-center" placeholder="N° CIN">
							<label> du :</label>
							<input type="date" name="date_cin" id="date_cin" class="form-control text-center" placeholder="Date du cin">
							<label> à :</label>
							<input type="text" name="ld_cin" id="lieu_cin" class="form-control text-center" placeholder="lieu de délivrance">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Filiation père :</label>
							<input type="text" name="pere" class="form-control text-center" placeholder="Nom du père" style="width: 60%;margin-left: 39px">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Filiation mére :</label>
						 	<input type="text" name="mere" class="form-control text-center" placeholder="Nom du mére" style="width: 60%;margin-left: 35px">
						 </div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Photo du client :</label>
							<input type="file" name="photo_client" class="form-control" id="photoprovince" style="margin-left: 23px">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Activité :</label>
							<input type="text" name="activite" class="form-control text-center" placeholder="Zavatra hatao" style="width: 46%;margin-left: 78px">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Date d'engagement :</label>
							<input type="date" name="date_enga" class="form-control text-center">
							<label class="control-label">Caution :</label>
							<input type="text" name="caution" class="form-control text-center" placeholder="Montant" style="width: 16%">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Adress :</label>
							<input type="text" name="adress" class="form-control text-center" id="adressClient" style="width:35%;margin-left: 83px">
							<input type="text" name="lot_cli" class="form-control text-center" id="lotClient" placeholder="lot maison">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Contact :</label>
							<input type="text" name="tel" class="form-control text-center" id="contact_cli"  placeholder="Contact">
							<label class="control-label"> Email :</label>
							<input type="text" name="mail" class="form-control text-center" id="email_cli"  placeholder="Email du client">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Citiation familliale :</label>
							<select name="Citiation" id="Citiation" class="form-control text-center" onchange="charge_citfamily()">
								<option value="" disabledselected >-- Citiation</option>
								<option value="Mpitovo" id="Mpitovo">Mpitovo</option>
								<option value="Mpanambady" id="Mpanambady" >Mpanambady</option>
							</select>
							<div class="form-inline mr-sm-2" id="mbd">
								<label class="control-label">Nom epous(e)  :</label>
								<input type="text" name="n_epous" class="form-control" id="n_epous">
								<label class="control-label">Nb d'enfant(s)  :</label>
								<input type="text" name="nb_enf" class="form-control" id="nb_enf">
							</div>
							
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">NIF  :</label>
							<input type="text" name="nif" class="form-control text-center" id="nif" placeholder="NIF">
							<label class="control-label" id="labstat">STAT  :</label>
							<input type="text" name="stat" class="form-control text-center" id="stat" placeholder="STAT">							
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">RC  :</label>
							<input type="text" name="rc" class="form-control text-center" id="rc" placeholder="RC">
							<label class="control-label" id="lbcb">CB  :</label>
							<input type="text" name="c_banc" class="form-control text-center" id="c_banc" placeholder="N° compte bancaire">
						</div>						
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Ancien metier  :</label>
							<input type="text" name="an_met" class="form-control text-center" id="an_met" placeholder="asa efa natao">
							<label class="control-label" id="labmet">Metier  :</label>
							<input type="text" name="meti" class="form-control text-center" id="meti" placeholder="Asa atao">
							<label class="control-label">Responsable  :</label>
							<input type="text" name="p_resp" class="form-control text-center" id="p_resp" placeholder="nbr">
						</div>
					</div>
					<div class="form-group">
						<div class="form-inline mr-sm-2">
							<label class="control-label">Materiel utilisé  :</label>
							<input type="text" name="mat_uti" class="form-control text-center" id="mat_uti" placeholder="spécialiste en">
							<label class="control-label" id="durt">Durété  :</label>
							<input type="text" name="dur_met" class="form-control text-center" id="dur_met" placeholder="Durété">
						</div>
					</div>
					<div  class="row col-sm-3">
						<button type="submit"  id="btn-repportage" class="btn btn-primary" name="button" background-color="blue" >ENREGISTRER</button>
					</div>
				</form>
			</div>
	</div>
</div>