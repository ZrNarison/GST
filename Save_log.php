<?php require_once("centre.php");

$num_box=($_POST["num_bo"]);
$date_pr=($_POST["d_pres"]);
$cout_loge=(mb_strtoupper($_POST["nom_ver"])." ".$_POST["pre_ver"]);
$sal_sec=$_POST["somme_ver"];

$req_box=$pdo -> prepare("INSERT INTO hofa(caution_box,date_pay,pers_pay,somme_pay,pers_vers,somme_vers) VALUES (?,?,?,?,?,?)");
$params=array($num_box,$date_pr,$cout_loge,$sal_sec,$sal_sec,$sal_sec);
$req_box->execute($params);
header("location:log.php");
?>