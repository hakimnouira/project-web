<?php
	include '../model/livraison.php';
    include '../controller/livraisonC.php';
$livraisonC=new livraisonC();
$list=null;
$list = $livraisonC->afficherlivraison();

include_once('../tcpdf/tcpdf.php');

//$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false,true);

//$pdf->SetMargins(10, 10, 10);
//$pdf->SetAutoPageBreak(true, 10);


$html = '<table border="1" width="80%" class="table-responsive p-0" align="right"  >
        <tr>
            <th>produit</th>
            <th>id livreur</th>
            
        </tr>';

foreach ($list as $livraison) {
    $html .= '<tr>
                <td>'.$livraison['produit'].'</td>
                <td>'.$livraison['id'].'</td>
               
               
            </tr>';
}

$html .= '</table>';
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('livraisons.pdf', 'D');