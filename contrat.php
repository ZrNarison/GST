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

$prm=("SELECT * FROM parametre ");
$rmp=$pdo->prepare($prm);
$rmp->execute();while($p=$rmp->fetch()){;
//$dt=date("d-m-Y",,strtotime($row['date_vente']))

require("fpdf.php");
$pdf= new FPDF();
$pdf->AddPage("P","A4",0);
$pdf->SetFont("Arial","B",11);

$pdf->Cell(175,3,("FIFANARAHANA FAMPANOFANANA TRANO FIVAROTANA"),0,0,"C",0);
$pdf->Cell(-10,20,("Ny ".($p["societe"])." ,izay an'ny ".($p["representant"])),0,1,"C");
/*$pdf->Ln();*/
$pdf->Cell(0,0,("miorina eto ".($p["adress_soc"])." ".($p["localisation"].", soloin'i ".($p["respo_soc"]))),0,1,"L");
$pdf->Cell(0,15,(" tena anay, manondro adiresy ao ".($p["adress_respo"])."."),0,1,"L");
$pdf->Cell(280,10,("ANTSOINA HOE TOMPONY "),0,1,"C");
$pdf->Cell(60,10,("SY "),0,1,"L");
$pdf->Cell(60,10,("Atoa/Rtoa ".($ficli["Nom"])." ".($ficli["Prenom"])." tompon'ny karam-panondro"),0,1,"L");
$pdf->Cell(60,10,("CIN N ".($ficli["n_cin"])." , nomena ny ".($ficli["date_cin"])." tao ".($ficli["lieu_cin"]).", mipetraka ao".($ficli["adress_client"])),0,1,"L");
$pdf->Cell(60,10,(" ,tompon'ny laharana finday ".($ficli["telephone"])),0,1,"L");
$pdf->Cell(280,10,("ANTSOINA HOE MPANOFA"),0,1,"C");
$pdf->Cell(60,10,("DIA MANAO IZAO FIFANARAHANA IZAO: "),0,1,"L");
$pdf->Cell(60,10,("Andininy 1: "),0,1,"L");
$pdf->Cell(190,0,("Ny tompon'ny toerana dia mampanofa an'Atoa/Rtoa ".($ficli["Nom"])." ".($ficli["Prenom"])),0,1,"C");
$pdf->Cell(100,8,(" ny efitrano lahrana ".($ficli["num_box"])),0,1,"L");

/*$pdf->Cell(298,1,(($ficli['photo'])),0,1,"C");
$pdf->Cell(95,5,("Anarana : ".($ficli['Nom'])." ".($ficli['Prenom'])),0,1,"L",0);
$pdf->Cell(45,10,("Zanak'i : ".($ficli['Parent'])." sy ".($ficli['Mr'])),0,1,"L",0);
$pdf->Cell(71,10,("CIN  : ".($ficli['n_cin'])." nomena tamin'ny ".($ficli['date_cin'])." tao ".mb_strtoupper($ficli['lieu_cin'])),0,1,"L");
$pdf->Cell(84,10,("Monina ao amin'ny: "." LOT ".($ficli['Lot_client'])."  ".($ficli['adress_client'])),0,1,"L");
$pdf->Cell(97,10,("Contact : ".($ficli['telephone'])."    ,"."Email : ".($ficli['email_cli'])),0,1,"L");
/*$pdf->Cell(58,10,("Email : ".($ficli['email_cli'])),0,1,"L");
$pdf->Cell(58,10,("Citiation de famille : ".($ficli['cit_fam'])),0,1,"L");
$pdf->Cell(58,10,("NIF : ".($ficli['nif'])."    ,"."STAT : ".($ficli['stat'])),0,1,"L");
/*$pdf->Cell(58,10,("STAT : ".($ficli['stat'])),0,1,"L");
$pdf->Cell(58,10,("RC : ".($ficli['rcc'])."    ,"."Compte Bancaire".($ficli['cbanc'])),0,1,"L");
/*$pdf->Cell(58,10,("Isan'ny efitrano ilaina : ".($ficlib['nb'])),0,1,"L");
$pdf->Cell(58,10,("Hofantrano : ".(($ficli['cuation'])." ariary (".(doubleval($ficli['cuation'])*5)." Fmg)")),0,1,"L");
$pdf->Cell(58,10,("Asa efa natao : ".($ficli['amet'])."    ,"."Asa kasaina hatao : ".($ficli['met'])),0,1,"L");
/*$pdf->Cell(58,10,("Asa kasaina hatao : ".($ficli['met'])),0,1,"L");
$pdf->Cell(58,10,("Isan'olona miasa ao amin'ny toeram-pivarotana : ".($ficli['per_respo'])),0,1,"L");
$pdf->Cell(58,10,("Fitaovana hampiasaina : ".($ficli['mat_uti'])."    ,".("Faharetan'ny asa : ".($ficli['dur_met']))),0,1,"L");
/*$pdf->Cell(58,10,("Faharetan'ny asa : ".($ficli['dur_met'])),0,1,"L");
$pdf->Cell(5,20,("Izaho dia manambara fa marina tsy misy fitaka ireo voalaza ambony ireo "),0,1,"L");
$pdf->Cell(245,4,("Ihosy, faha .................................."),0,1,"C");
$pdf->Cell(258,10,("Sonia"),0,1,"C");
$pdf->Cell(8,40,("--------------------------------------------------------------------------------------------------------------"),0,1,"L");*/
};
$pdf->Output();


?>