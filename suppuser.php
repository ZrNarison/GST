<?php require_once("centre.php");
$code=$_GET['class'];

$requser="SELECT COUNT(user) AS nb FROM login ";
$retour=$pdo->prepare($requser);
$retour->execute();
$rqet=$retour->fetch();

if ($code=="Administrateur"){
	print(mb_strtoupper("impossible de supprimer le compte d' ").mb_strtoupper($code)); 
}else{
	$ps=$pdo->prepare("DELETE FROM login WHERE crt=?");
	$params=array($code);
	$ps->execute($params);
	header("location:puser.php");
};

?>