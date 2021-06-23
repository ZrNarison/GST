<?php require_once("centre.php");
$n_box=$_POST["num_bo"];
$dp_cpt=$_POST['datepcpt'];
$va_cpt=$_POST['v_ant'];
$dt_cpt=$_POST['datecpt'];
/*$nm_cpt=(mb_strtoupper($_POST['nomcpt'])." ".$_POST['precpt']);*/
$sm_cpt=$_POST['sommecpt'];

$requete="SELECT * FROM jiram WHERE N_box='".($_POST["num_bo"])."' AND date_fact='".($dp_cpt)."'";
$retour=$pdo->prepare($requete);
$retour->execute();
$ret=$retour->fetch();

$reqprm="SELECT * FROM parametre ";
$rqpm=$pdo->prepare($reqprm);
$rqpm->execute();
$rp=$rqpm->fetch();

$reqbox="SELECT * FROM piece WHERE N_box='".$n_box."'";
$rqbx=$pdo->prepare($reqbox);
$rqbx->execute();
$rb=$rqbx->fetch();

$cdp=((doubleval($va_cpt))-(doubleval($ret['val_prs'])));
$ds=($cdp*(doubleval($rp["kwt"])))+(doubleval($rb["securite"]));
$som=(doubleval($sm_cpt));
$as=(($som -$ds));
$rtn=($som-$cdp);


if ($ds>$som) {
	echo('<script type="text/javascript">alert(" Solde versant inssuffisante")</script>');
	// echo((mb_strtoupper("Il manque "))." ".($ds-$som));
}elseif ($ds==$som) {
	$ps=$pdo->prepare("INSERT INTO jiram (N_box,date_pres,val_prs,date_fact,somme_vers,conso,ntp,notif)VALUES (?,?,?,?,?,?,?,?)");
	$params=array($n_box,$dp_cpt,$va_cpt,$dt_cpt,$som,$cdp,$ds,$as);
	$ps->execute($params);
	header("location:circuit.php");
}elseif ($ds<$som) {
	$ps=$pdo->prepare("INSERT INTO jiram (N_box,date_pres,val_prs,date_fact,somme_vers,conso,ntp,notif)VALUES (?,?,?,?,?,?,?,?)");
	$params=array($n_box,$dp_cpt,$va_cpt,$dt_cpt,$som,$cdp,$ds,$as);
	$ps->execute($params);
	header("location:circuit.php");
};?>
