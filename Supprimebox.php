<?php require_once("centre.php");
$code=$_GET['num_box'];
$ps=$pdo->prepare("DELETE FROM piece WHERE N_box=?");
$params=array($code);
$ps->execute($params);
header("location:comptoir.php");
?>