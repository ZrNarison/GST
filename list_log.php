<?php require_once("centre.php");
$querybox="SELECT * FROM hofa As c,piece AS p ,client As cli WHERE c.caution_box=p.N_box AND p.N_box=cli.num_box";
$log=$pdo->prepare($querybox);
$log->execute() ;?>