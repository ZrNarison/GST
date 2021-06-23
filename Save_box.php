<?php require_once("centre.php");

$num_box=($_POST["n_box"]);$cout_loge=$_POST["loge"];$sal_sec=$_POST["sec"];/*$long_loge=$_POST["lon"];$larg_loge=$_POST["lar"];*/
$empla=($_POST["emp"]);
$reqbox="SELECT (N_box) AS verif_box FROM piece WHERE N_box like'".$_POST['n_box']."'";
$reqbo=$pdo->prepare($reqbox);
$reqbo->execute();
$reqb=$reqbo->fetch();


	if(($reqb["verif_box"])==($_POST["n_box"] )){
		/*if (($reqb["verif_trano"])==($_POST["loge"])){*/

			echo('<script type="text/javascript">alert("BOX DEJA ENREGISTRE, MERCI DE RESAISIR UNE AUTRE NUMERO !")</script>');
			// echo mb_strtoupper("box déjà enregistré, merci resaisir une autre numéro !");
			/*}else{
					$req_box=$pdo -> prepare("INSERT INTO piece (N_box, hofa, securite) VALUES (?,?,?)");
					$params=array($num_box,$cout_loge,$sal_sec);
					$req_box->execute($params);
					header("location:comptoir.php");};*/
		}else{
				$req_box=$pdo -> prepare("INSERT INTO piece (N_box, hofa, securite,emplacement) VALUES (?,?,?,?)");
				$params=array($num_box,$cout_loge,$sal_sec,$empla);
				$req_box->execute($params);
				header("location:comptoir.php");
};?>