<?php
// Inclusion de la bibliothèque FPDF
require('C:\xampp\htdocs\FOURNISSEUR\lib\fpdf.php');
include '../Controller/FournisseurC.php';
$FournisseurC=new FournisseurC();
$listef=$FournisseurC->afficherFournisseur();

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
$pdf->Cell(30,10,'Id',1,0,'C');
$pdf->Cell(30,10,'NOM',1,0,'C');
$pdf->Cell(30,10,'PRIX',1,0,'C');
$pdf->Cell(30,10,'QUANTITER',1,0,'C');
$pdf->Cell(50,10,'DESCRIPTION',1,0,'C');

// Définition de la police de caractères pour les données
$pdf->SetFont('Arial','',10);


// Affichage des frs

foreach($listef as $fr) {
    
    $pdf->Ln(); // Saut de ligne
    $pdf->Cell(30,10,$fr['Id'],1,0,'C');
    $pdf->Cell(30,10,$fr['Nom'],1,0,'C');
    $pdf->Cell(30,10,$fr['Prix'],1,0,'C');
    $pdf->Cell(30,10,$fr['Quantite'],1,0,'C');
    $pdf->Cell(50,10,$fr['Description'],1,0,'L');
    
}

// Définition des pieds de page
$pdf->SetY(-15);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');



// Envoi du PDF au navigateur
$pdf->Output();
?>