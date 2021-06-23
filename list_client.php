<?php require_once("centre.php");
$query_box="SELECT * FROM client ORDER BY idclient";
$log=$pdo->prepare($query_box);
$log->execute() ;

$parms="SELECT * FROM parametre ";
$parm=$pdo->prepare($parms);
$parm->execute() ;

$lgn="SELECT * FROM login ";
$lg=$pdo->prepare($lgn);
$lg->execute() ;
?>