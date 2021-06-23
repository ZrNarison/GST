<?php require_once("centre.php");
$nb_box=$_POST["num_box"];
$cout=$_POST['loge'];
$scrt=$_POST['sec'];
$lng=$_POST['lon'];
$lrg=$_POST['lar'];

$ps=$pdo->prepare("UPDATE piece SET hofa=?,securite=?,longueur=?,largeur=? WHERE N_box =?");
$params=array($cout,$scrt,$lng,$lrg,$nb_box);
$ps->execute($params);
/*echo("$nb_box"." "."$cout"." "."$scrt");*/
header("location:comptoir.php")
?>
