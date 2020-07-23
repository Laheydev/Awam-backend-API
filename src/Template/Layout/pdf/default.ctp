<?php
// inclusion de la librairie TCPDF
require_once(ROOT.'/vendor/tecknick.com/tcpdf/config/tcpdf_config.php');
require_once(ROOT.'/vendor/tecknick.com/tcpdf/tcpdf.php');

// Création d'un document TCPDF avec les variables par défaut
$pdf = new TCPDF('L', 'mm', PDF_PAGE_FORMAT, TRUE, 'UTF-8', FALSE);
// Spécification de certains paramètres de TCPDF (içi on spécifie l'auteur par défaut)
$pdf->SetCreator(PDF_CREATOR);

// On enlève l'entête et le pied de page
$pdf->setPrintHeader(FALSE);
$pdf->setPrintFooter(FALSE);

// On spécifie la fonte par défaut
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// On définit les marges
$pdf->SetMargins(10, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(5);

// On indique que le dépassement d'une page entraine automatiquement la création d'un saut de page et d'une nouvelle page
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// ---------------------------------------------------------

// La fonte et la couleur à utiliser dans la page qui va être créée
$pdf->SetFont('times', '', 10);
$pdf->setColor('text', 0, 0, 0);
// On ajoute une page
$pdf->AddPage();

$pdf->SetDisplayMode('fullpage');
// voilà l'astuce, on récupère la vue HTML créée par CakePHP pour alimenter notre fichier PDF
$pdf->writeHTML($this->fetch('content'), TRUE, FALSE, TRUE, FALSE, '');
// on ferme la page
$pdf->lastPage();
// On indique à TCPDF que le fichier doit être enregistré sur le serveur ($filename étant une variable que vous aurez pris soin de définir dans l'action de votre controller)
$pdf->Output(WWW_ROOT . '/send.pdf', $dest = 'F' )
?>
