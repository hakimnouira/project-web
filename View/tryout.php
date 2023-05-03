<?php
	include '../model/livraison.php';
    include '../controller/livraisonC.php';
$livraisonC=new livraisonC();
$list=null;
$list = $livraisonC->afficherlivraison();

    $livraisonc1 = new livraisonC();
$data = $livraisonc1->calculstat();


?>

<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/0hubcrpd.png">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>
    liste des livraisons
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">

    <nav>
<div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/0hubcrpd.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">GreenHub Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="ListLivreur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Liste Livreurs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="addLivreur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Add livreur</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active " href="afficherlivraison.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Liste livraison</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="addlivraison.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">ajouter livraison</span>
          </a>
        </li>
      </ul>
    </div>

  </aside>
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">


  <h1 align="center">Liste des livraisons</h1>
<br>
<br>
<center>
  <input type="text" id="search-input" placeholder="Search..." >
  </center>

<table border="1" width="80%" class="table-responsive p-0" align="right">
  <thead>
    <tr>
      <th>produit</th>
      <th>id livreur</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody id="results-body">
    <!-- table rows are dynamically added based on search term -->
    <?php foreach ($list as $livraison) { ?>
      <tr>
        <td><?= $livraison['produit']; ?></td>
        <td><?= $livraison['id']; ?></td>
        <td align="center">
          <form method="POST" action="updateLivraison.php">
            <input type="submit" name="update" value="Update">
            <input type="hidden" value=<?PHP echo $livraison['id_livraison']; ?> name="id_livraison">
          </form>
        </td>
        <td>
          <a href="deleteLivraison.php?id_livraison=<?php echo $livraison['id_livraison']; ?>" onclick="return confirm('Do you really want to delete?')" > Delete</a>
        </td>
      </tr>
    <?php } ?>
    <center>
    <div> </div>
    <a href="exportpdf.php">export pdf</a> 
    </center>
  </tbody>
</table>
    <a href="exportpdf.php">pdf</a>
    
 
      <script>
        const input = document.getElementById('search-input');
const tableRows = document.querySelectorAll('#results-body tr');

input.addEventListener('keyup', function() {
  const searchTerm = input.value.trim().toLowerCase();

  tableRows.forEach(row => {
    const produitCell = row.querySelector('td:first-child');
    const matches = produitCell.textContent.trim().toLowerCase().includes(searchTerm);
    row.style.display = matches ? '' : 'none';
  });
});
      </script>

      <center>
      </nav>
    <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js%22%3E</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable(<?php echo json_encode($livraisonc1->calculstat()); ?>);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
  </center>

    <center>
      <div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </center>

  
</body>
</html>