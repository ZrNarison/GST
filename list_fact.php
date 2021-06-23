<?php require_once("centre.php");
$query_box="SELECT * FROM jiram As j, piece As p Where j.N_box=p.N_box";
$log=$pdo->prepare($query_box);
$log->execute() ;?>