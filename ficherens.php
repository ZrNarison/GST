<?php require_once("centre.php");

$nomcli=$_GET['code'];
$ps=$pdo->prepare("SELECT * FROM client WHERE idclient=? Group By n_cin");
$params=array($nomcli);
$ps->execute($params);
$ficli=$ps->fetch();

/*$psb=$pdo->prepare("SELECT DISTINCT COUNT num_box AS nb FROM client WHERE Nom=? Group By n_cin");
$paramsb=array($nomcli);
$psb->execute($paramsb);
$ficlib=$psb->fetch();*/

require("fpdf.php");
$pdf= new FPDF("P","mm","A4");
$pdf->AddPage();
$pdf->SetFont("Arial","B",14);
$pdf->Cell(175,3,"FICHE DE RENSEIGNEMENT",0,0,"C",0);
$pdf->Cell(-264,20,"I - MOMBA NY OLONA MANOKANA",0,1,"C");
/*$pdf->Cell(298,1,(($ficli['photo'])),0,1,"C");*/
$pdf->Cell(95,5,("Anarana : ".($ficli['Nom'])." ".($ficli['Prenom'])),0,1,"L",0);
$pdf->Cell(45,10,("Zanak'i : ".($ficli['Parent'])." sy ".($ficli['Mr'])),0,1,"L",0);
$pdf->Cell(71,10,("CIN  : ".($ficli['n_cin'])." nomena tamin'ny ".($ficli['date_cin'])." tao ".mb_strtoupper($ficli['lieu_cin'])),0,1,"L");
$pdf->Cell(84,10,("Monina ao amin'ny: "." LOT ".($ficli['Lot_client'])."  ".($ficli['adress_client'])),0,1,"L");
$pdf->Cell(97,10,("Contact : ".($ficli['telephone'])."    ,"."Email : ".($ficli['email_cli'])),0,1,"L");
/*$pdf->Cell(58,10,("Email : ".($ficli['email_cli'])),0,1,"L");*/
$pdf->Cell(58,10,("Citiation de famille : ".($ficli['cit_fam'])),0,1,"L");
$pdf->Cell(58,10,("NIF : ".($ficli['nif'])."    ,"."STAT : ".($ficli['stat'])),0,1,"L");
/*$pdf->Cell(58,10,("STAT : ".($ficli['stat'])),0,1,"L");*/
$pdf->Cell(58,10,("RC : ".($ficli['rcc'])."    ,"."Compte Bancaire".($ficli['cbanc'])),0,1,"L");
/*$pdf->Cell(58,10,("Isan'ny efitrano ilaina : ".($ficlib['nb'])),0,1,"L");*/
$pdf->Cell(58,10,("Hofantrano : ".(($ficli['cuation'])." ariary (".(doubleval($ficli['cuation'])*5)." Fmg)")),0,1,"L");
$pdf->Cell(58,10,("Asa efa natao : ".($ficli['amet'])."    ,"."Asa kasaina hatao : ".($ficli['met'])),0,1,"L");
/*$pdf->Cell(58,10,("Asa kasaina hatao : ".($ficli['met'])),0,1,"L");*/
$pdf->Cell(58,10,("Isan'olona miasa ao amin'ny toeram-pivarotana : ".($ficli['per_respo'])),0,1,"L");
$pdf->Cell(58,10,("Fitaovana hampiasaina : ".($ficli['mat_uti'])."    ,".("Faharetan'ny asa : ".($ficli['dur_met']))),0,1,"L");
/*$pdf->Cell(58,10,("Faharetan'ny asa : ".($ficli['dur_met'])),0,1,"L");*/
$pdf->Cell(5,20,("Izaho dia manambara fa marina tsy misy fitaka ireo voalaza ambony ireo "),0,1,"L");
$pdf->Cell(245,4,("Ihosy, faha .................................."),0,1,"C");
$pdf->Cell(258,10,("Sonia"),0,1,"C");
$pdf->Cell(8,40,("--------------------------------------------------------------------------------------------------------------"),0,1,"L");


$pdf->Output();
?>