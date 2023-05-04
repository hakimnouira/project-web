<?php
require_once 'connect.php';
// Include the FPDF library

require('C:\xampp\htdocs\fpdf\fpdf.php');

// Create a new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set the font and font size
$pdf->SetFont('Arial','B',14);

// Create the table header
$pdf->Cell(40,10,'id',1);
$pdf->Cell(60,10,'first_name',1);
$pdf->Cell(40,10,'last_name',1);
$pdf->Ln();

// Define the database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_client";
$conn = new mysqli($servername, $username, $password, $dbname);

$pdo = new PDO("mysql:host=localhost;dbname=crud_client", "root", "");


// Create a new database connection


// Check if the connection was successful
$sql = "SELECT * FROM clients";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error executing query: " . $conn->error);
}



// Create the SQL query to retrieve the data
$sql = "SELECT * FROM clients ";
$query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchALL(PDO::FETCH_OBJ);

            $cnt=1;

            if($query->rowCount()>0){
              foreach($results as $result)
              
            

// Loop through the results and add them to the table
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$pdf->Cell(40,10,$row["id"],1);
		$pdf->Cell(60,10,$row["first_name"],1);
		$pdf->Cell(40,10,$row["last_name"],1);
        

		$pdf->Ln();
	}
} else {
	echo "No data available";
}

// Close the database connection
$conn->close();

// Output the PDF document
$pdf->Output();
}?>