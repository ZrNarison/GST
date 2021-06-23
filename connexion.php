<?php require_once("centre.php");
$my_list="SELECT * FROM Login ";
$my_req=$pdo->prepare($my_list);
$my_req->execute();?>