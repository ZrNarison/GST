<?php require_once("centre.php");
    $codfact=$_GET['numfact'];
    $ps=$pdo->prepare("DELETE FROM jiram WHERE idjirm=? ");
    $params=array($codfact);
    $ps->execute($params);
    header("location:circuit.php");
?>