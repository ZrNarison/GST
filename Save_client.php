<?php require_once("centre.php");
$n_box=$_POST["num_bo"];
$nom_cli=mb_strtoupper($_POST["nom_ver"]);
$pren_cli=$_POST["pre_ver"];
$date_cli=$_POST["date_nais"];
// $adClient=(mb_strtoupper($_POST["nom_ver"]).$_POST["pre_ver"]);
$lieu_cli=mb_strtoupper($_POST["lieu_nais"]);
$cin_cli=($_POST["cin"]);
$dcin_cli=($_POST["date_cin"]);
$lcin_cli=($_POST["ld_cin"]);
$mail_cli=($_POST["mail"]);
$cit_cli=($_POST["Citiation"]);
$lt_cli=mb_strtoupper($_POST["lot_cli"]);
$ep_cli=mb_strtoupper($_POST["n_epous"]);
$enf_cli=($_POST["nb_enf"]);
$nif_cli=($_POST["nif"]);
$stat_cli=($_POST["stat"]);
$rc_cli=($_POST["rc"]);
$banc_cli=($_POST["c_banc"]);
$amet_cli=mb_strtoupper($_POST["an_met"]);
$met_cli=mb_strtoupper($_POST["meti"]);
$presp_cli=($_POST["p_resp"]);
$muti_cli=mb_strtoupper($_POST["mat_uti"]);
$dmet_cli=($_POST["dur_met"]);
$peme_cli=mb_strtoupper($_POST["pere"]);
$mr_cli=mb_strtoupper($_POST["mere"]);
$imge_cli=mb_strtoupper($_FILES['photo_client']['name']);
$act_cli=mb_strtoupper($_POST["activite"]);
$date_cre=$_POST["date_enga"];
$caut_cli=$_POST["caution"];
$contatc=$_POST["tel"];
$adre_cli=mb_strtoupper($_POST["adress"]);
$fichierClient=$_FILES['photo_client']['tmp_name'];
move_uploaded_file($fichierClient, 'img/Client/'.$imge_cli);

$reqclient="SELECT (num_box) AS nbox, (Nom) AS name FROM client WHERE num_box='".($n_box)."' ";
$reqclien=$pdo->prepare($reqclient);
$reqclien->execute();
$reqcl=$reqclien->fetch();

if (($reqcl["nbox"])==($_POST["num_bo"])){
	echo mb_strtoupper("box ".$n_box." déjà engagé");
}elseif(($reqcl["name"])==(mb_strtoupper($_POST["nom_ver"]))){
	echo mb_strtoupper("l'ajout du".$nom_cli." qui commande le box".$n_box."est déja faite");
}else{
	$req_box=$pdo -> prepare("INSERT INTO client ( num_box, Nom,Prenom,date_naissance,lieu_naissance,Parent,Profession,date_vente,cuation,adress_client,photo,telephone,n_cin,date_cin,email_cli,cit_fam,epous,enfant,nif,stat,rcc,cbanc,amet,met,per_respo,mat_uti,dur_met,Mr,lieu_cin,Lot_client) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$params=array($n_box,$nom_cli,$pren_cli,$date_cli,$lieu_cli,$peme_cli,$act_cli,$date_cre,$caut_cli,$adre_cli,$imge_cli,$contatc,$cin_cli,$dcin_cli,$mail_cli,$cit_cli,$ep_cli,$enf_cli,$nif_cli,$stat_cli,$rc_cli,$banc_cli,$amet_cli,$met_cli,$presp_cli,$muti_cli,$dmet_cli,$mr_cli,$lcin_cli,$lt_cli);
	$req_box->execute($params);
	header("location:person.php");};
?>