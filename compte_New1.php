<!DOCTYPE html>
  <html>
  <head> 
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/jquery-validate.js"></script>
        <title>SECURITY</title>
  </head>
  <body>    
  <div class="navbar navbar-expand-sm bg-dark navbar-nav"><?php require("../complement/entete2.php");?></div>
    <div class="container spacer col-md-5 col-xs-12 col-md-offset-3">
      <div class="card">
        <div class="panel-primary bg-info"><h3 class="text-center">MODIFICATION COMPTE</h3> </div>        
        <form class="form-inline" style="margin-top: 10px">
          <a href="nouveau_compte.php" id="nouveau_compte"  class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 75%">Créer compte</a>
        </form>
        <div class="panel-primary col-md-7">
			    <form method="POST" action="../ajout/editcompte.php"  enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label">UTILISATEUR</label>       
                <select name="utilisateur" id="mod" class="form-control text-center"><option value="" disabled selected>Séléctionner une de Site PNNC</option>
                  <?php require_once("../ajout/ongbase.php");$liste="SELECT  * FROM compte ORDER BY fonction";$li=$pdo->prepare($liste);$li->execute();while($et=$li->fetch()) {;echo "<option value='".($et['user'])."'>".utf8_encode($et['user'])/*($et['CODECOMMUNE'])*/."</option>" ;};?> 
                </select>
            </div>
            <div class="form-group">
              <label class="control-label">MOT DE PASS :</label>
              <input type="password"  name="encien" id="pass" class="form-control text-center" placeholder="Entrer votre encien mot de pass"/>
            </div>
            <div class="form-group">
              <label class="control-label">CONFIRMATION :</label>
              <input type="password" name="confirm" id="pass" class="form-control text-center" placeholder="Veuillez confirmé SVP !">
            </div>
            <div class="btn-block">                       
              <button  id="btn-site" class="btn btn-success">ENREGISTRER</button>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>              
  </body>
  </html>
