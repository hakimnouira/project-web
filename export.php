<?php
// Inclusion de la bibliothèque FPDF
require('C:\xampp\htdocs\webnv\lib\fpdf.php');

include '../Controller/eventC.php';
$eventC = new eventC();
$list = $eventC->listevent();

// Connexion à la base de données


// Préparation de la requête SQL pour récupérer les frs


// Exécution de la requête SQL


// Récupération des résultats de la requête SQL


// Création d'un objet PDF
$pdf = new FPDF();

// Ajout d'une page
$pdf->AddPage();

$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(230, 230, 230);


// Définition de la police de caractères pour les en-têtes
$pdf->SetFont('Arial','B',12);

// Écriture des en-têtes pour chaque colonne
$pdf->Cell(30,10,'id_event',1,0,'C');
$pdf->Cell(30,10,'place',1,0,'C');
$pdf->Cell(30,10,'type',1,0,'C');
$pdf->Cell(30,10,'capacity',1,0,'C');
$pdf->Cell(30,10,'date',1,0,'C');
$pdf->Cell(40,10,'description',1,0,'C');

// Définition de la police de caractères pour les données
$pdf->SetFont('Arial','',10);


// Affichage des frs

foreach($list as $event) {

    $pdf->Ln(); // Saut de ligne
    $pdf->Cell(30,10,$event['id_event'],1,0,'C');
    $pdf->Cell(30,10,$event['place'],1,0,'C');
    $pdf->Cell(30,10,$event['type'],1,0,'C');
    $pdf->Cell(30,10,$event['capacity'],1,0,'C');
    $pdf->Cell(30,10,$event['date'],1,0,'L');
    $pdf->Cell(40,10,$event['description'],1,0,'L');
}

// Définition des pieds de page
$pdf->SetY(-15);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');



// Envoi du PDF au navigateur
$pdf->Output();
?>