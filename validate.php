<?php require_once("connexion.php");
$ust=$_POST["use"];
$code=md5($_POST["password"]);
$my_requete="SELECT user, mdp,crt from Login where crt='".$ust."'";
$my_login=$pdo->prepare($my_requete);
$my_login->execute();
$my_entry=$my_login->fetch();


if(($code==($my_entry["mdp"]))AND(($my_entry["crt"])==("Administrateur"))){
		header("location:AdmMenu.php");
	}elseif (($code==($my_entry["mdp"]))AND(($my_entry["crt"])==("Secretaire"))){
		header("location:Menu.php");
}else{
	header("location:Index.php");
};?>