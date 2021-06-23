<?php require_once("centre.php");
$cr_cpt=($_POST["crtcpt"]);
$nm_cpt=($_POST["nom_c"]);
$md_cpt=md5($_POST["mdp"]);

$nbre="SELECT COUNT(user) AS verif_user FROM login";
$qretour=$pdo->prepare($nbre);$qretour->execute();
$qret=$qretour->fetch();

$requser="SELECT crt As p, mdp As m FROM login  WHERE crt like'".$cr_cpt."'";
$retour=$pdo->prepare($requser);
$retour->execute();
$ret=$retour->fetch();

if (($ret["p"])==($cr_cpt)) {
    echo(mb_strtoupper("Vous ne pouvez pas utiliser deux compte ".$cr_cpt.". Merci"));
}elseif($qret["verif_user"]>=2){
	echo(mb_strtoupper("Vous ne pouvez pas créer d'autre compte ".$cr_cpt.", Veuillez consulter votre administrateur web. Merci"));
    }else{$req_box=$pdo -> prepare("INSERT INTO login (crt,user, mdp) VALUES (?,?,?)");
        $params=array($cr_cpt,$nm_cpt,$md_cpt);
        $req_box->execute($params);
        header("location:Index.php");};
?>