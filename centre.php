<?php
try{
  $strConnection ='mysql://host=localhost;dbname=tsena;port:3306';
  $ong = array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
  $pdo = new PDO ($strConnection,'root','',$ong);
}
catch (PDOException $e){
    $msg ='Erreur PDO dans'. $e->getmessage();
    die ($msg);}
?>