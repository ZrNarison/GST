<?php
require_once('centre.php');
$box=$_GET['num_box'];
$ps=$pdo->prepare("SELECT * FROM piece WHERE N_box=?");
$params=array($box);
$ps->execute($params);
$reqbox=$ps->fetch();
?>
<div class="">
	<div class="spacer panel-info panel-body body" id="body">
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
