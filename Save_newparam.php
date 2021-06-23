<?php require_once("centre.php");

// class parametre{

    $app=mb_strtoupper($_POST["nomapp"]);
    $sct=mb_strtoupper($_POST["soc"]);
    $rpre=$_POST["repre"];
    $lcl=mb_strtoupper($_POST["loca"]);
    $dasoc=mb_strtoupper($_POST["adSoc"]);
    $ressoc=$_POST["respo"];
    $adsrep=mb_strtoupper($_POST["adreResp"]);
    $tet=mb_strtoupper($_POST["enten"]);
    $cot=$_POST["cou"];
    $cmenu=$_POST["corpmenu"];

    $requser="SELECT * FROM parametre ";
    $retour=$pdo->prepare($requser);
    $retour->execute();
    $rqet=$retour->fetch();

    $prmsql=$pdo->prepare("UPDATE parametre SET nom_appli=?,societe=?,adress_soc=?,localisation=?,representant=?,respo_soc=?,adress_respo=?,entete=?,kwt=?,corps_menu=? WHERE  nom_appli='".($rqet['nom_appli'])."'");
    $prm=array($app,$sct,$dasoc,$lcl,$rpre,$ressoc,$adsrep,$tet,$cot,$cmenu);
    $prmsql->execute($prm);
    header("location:newparam.php");
//  }

?>