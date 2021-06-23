<?php require_once("centre.php");
$an_user=$_POST["ancinom"];
$ap_user=md5($_POST['anmdps']);
$nn_user=$_POST['nouvnom'];
$mpd_user=md5($_POST['modps']);

$requser="SELECT user As p, mdp As m FROM login  WHERE user like'".$_POST['ancinom']."'";
$retour=$pdo->prepare($requser);
$retour->execute();
$ret=$retour->fetch();

if (($ret["p"])<>($an_user)) {
	echo(mb_strtoupper("nom d'utilisateur incorrect"));
}elseif (($ret["m"])==($ap_user)) {
	$ps=$pdo->prepare("UPDATE login SET user=?,mdp=? WHERE user =? ");
$params=array($nn_user,$mpd_user,$an_user);
$ps->execute($params);
header("location:index.php");
}else{
	echo(mb_strtoupper("mot de pass incorrect"));
};

?>
