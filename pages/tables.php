<?php
                   
                 include '../../Controller/productC.php';
                   $productC = new productC();
                   $list = $productC->listproduct();
                   include '../../Controller/productCspec.php';
                   $productCspec = new productCspec();




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="../assets/img/0hub.png" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="../assets/css/popup.css" rel="stylesheet" />
  <link href="../assets/css/shop.css" rel="stylesheet" />
  <link href="../assets/css/Progress _Bar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

 
  <script src="../assets/js/popup.js"></script>
  <script src="../assets/js/shop.js"></script>
  <script src="../assets/js/test.js"></script>
        <link rel="stylesheet" href="../assets/css/test.css">

</head>

<body >
  
  


  <script src="../assets/js/popup.js"></script>
    <!-- Navbar -->
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="../assets/img/0hub.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">green hub</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="../pages/afficherFideliter.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fidelitée</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">product
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/afficherFournisseur.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fournisseur</span>
          </a>
          <li class="nav-item">
          <a class="nav-link " href="/5edma/view/listevent.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Event</span>
          </a>

        </li><li class="nav-item">
          <a class="nav-link " href="/5edma/view/afficherlivraison.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Livraison</span>
          </a>
        </li>

        </li><li class="nav-item">
          <a class="nav-link " href="/5EDMA/crud/back/view/pages/user.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Clients</span>
          </a>
        </li>


      
       
       
       
       
      </ul>
    </div>
    
  </aside>


    <!-- Navbar -->


  <main class="main-content position-relative border-radius-lg ">


    






    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
           
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
 















    

    
    <section class="events-section events-listing-section section-bg section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="app-container" >
                            
                            <div class="app-content">
                              <div class="app-content-header">
                                <h1 class="app-content-headerText">Products</h1>
                                <button class="mode-switch" title="Switch Theme">
                                  <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                                    <defs></defs>
                                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                                  </svg>
                                </button>
                                <button class="app-content-headerButton" onclick="mini_add()" >Add Product</button>
                              </div>
                              
                              <div class="app-content-actions">
                              <FORM NAME="Choix" id="myForm" method="POST"   >
                                <input class="search-bar" placeholder="Search..." type="text" name="Search" onclick="aab()">
                               
<SELECT NAME="Liste"  type="submit" >
<OPTION VALUE="product_name">product_name
<OPTION VALUE="product_des">product_des
<OPTION VALUE="product_price">product_price
<OPTION VALUE="product_quantity">product_quantity

</SELECT>
</FORM>

                                <div class="app-content-actions-wrapper">
                           



<script>
const myForm = document.getElementById("myForm");
console.log("zrfqsgfsdgf")
  function aab(){
    const myForm = document.getElementById("myForm");
//$.post("", { name: name });
console.log("zrfqsgfsdgf");
myForm.sumbit();
<?php
//👇 output response with php
print_r($_POST);

if (!empty($_POST["Search"])   ) {
  $list = $productC->listproductW($_POST["Search"],$_POST["Liste"]);
}


?>

};


 






</script>




                                  <div class="filter-button-wrapper">
                                    <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
                                    <div class="filter-menu">
                                      <label>Category</label>
                                      <select>
                                        <option>All Categories</option>
                                        <option>Furniture</option>                     <option>Decoration</option>
                                        <option>Kitchen</option>
                                        <option>Bathroom</option>
                                      </select>
                                      <label>Status</label>
                                      <select>
                                        <option>All Status</option>
                                        <option>Active</option>
                                        <option>Disabled</option>
                                      </select>
                                      <div class="filter-menu-buttons">
                                        <button class="filter-button reset">
                                          Reset
                                        </button>
                                        <button class="filter-button apply">
                                          Apply
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="action-button list active" title="List View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                                  </button>
                                  <button class="action-button grid" title="Grid View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                                  </button>
                                </div>
                              </div>
                              <div class="products-area-wrapper tableView" id="demo11">
                                <div class="products-header">
                                  <div class="product-cell image">
                                    Items
                                    <button class="sort-button">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                                    </button>
                                  </div>
                                 
                                    <div class="product-cell category"><button class="sort-button">
                                     
                                    </button></div>
                                    <div class="product-cell category"> status<button class="sort-button">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                                    </button></div>
                                  <div class="product-cell status-cell">  price <button class="sort-button">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                                    </button></div>
                                  <div class="product-cell sales">quantity<button class="sort-button">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                                    </button></div>
                                  <div class="product-cell stock"><button class="sort-button">
                                      
                                    </button></div>
                                  <div class="product-cell price"><button class="sort-button">
                                      
                                    </button></div>
                                </div>







    <script >

      function mini_update(id) {
let row = document.getElementById(id);

let name = row.getElementsByClassName("product-cell image")[0].getElementsByTagName("span")[0].innerText;
let category = row.getElementsByClassName("product-cell category")[0].innerText;
let price = row.getElementsByClassName("product-cell price")[0].innerText;
let stock = row.getElementsByClassName("product-cell stock")[0].innerText;
let img = row.getElementsByClassName("product-cell image")[0].getElementsByTagName("img")[0].getAttribute('src');
console.log(row.getElementsByClassName("product-cell image")[0].getElementsByTagName("img")[0].getAttribute('src'));
row.innerHTML = `



<input type="hidden" name="id" value="${id}">
<form enctype="multipart/form-data" name="testF" id="testF" action="../../View/updateproduct.php" method="post" onsubmit="return validateForm()">
<div class="product-cell image">

<input type="hidden"  name="product_id" value="${id}" size="3" readonly>

<input type="text" name="product_img" value="${img}" onchange="validateImage(this)" >

<span> <input type="text" name="product_name" value="${name}" size="8" onchange="validateName(this)" > </span>

<div class="product-cell category"><input type="text" name="product_des" value="${category}" size="8" onchange="validateCategory(this)" ></div>
<div class="product-cell status-cell">
    <span class="cell-label">Status:</span>
    <span class="status active"> active</span>
</div>

<div class="product-cell price"><input type="number" name="product_price" value="${price}" size="8" onchange="validatePrice(this)" ></div>
<div class="product-cell stock"><input type="number" name="product_quantity" value="${stock}" size="8" onchange="validateQuantity(this)" ></div>
<div class="product-cell">
    <button type="button" onclick="cancel_update(${id},'${img}','${name}','${category}',${price},${stock})">Cancel</button>
</div>
<input  type="submit" name="sub" id="sub" value="Update">
</form>
`;

function validateImage(input) {
        const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        const fileName = input.value;
        const fileExtension = fileName.split('.').pop().toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
            alert('Invalid file type! Please choose an image file (JPG, JPEG, PNG, GIF).');
            input.value = '';
            return false;
        }
        return true;
    }

    function validateName(input) {
        if (input.value.length < 2) {
            alert('Product name must be at least 2 characters long!');
            input.value = '';
        }
    }

    function validateCategory(input) {
        if (input.value.length < 2) {
            alert('Product category must be at least 2 characters long!');
            input.value = '';
        }
    }

    function validatePrice(input) {
        if (input.value <= 0) {
            alert('Product price must be greater than 0!');
            input.value = '';
        }
    }

    function validateQuantity(input) {
        if (input.value <= 0) {
            alert('Product quantity must be greater than 0!');
            input.value = '';
        }
    }

    function validateForm() {
        const imgInput = document.getElementsByName('product_img')[0];
        const nameInput = document.getElementsByName('product_name')[0];
        const categoryInput = document.getElementsByName('product_des')[0];
        const priceInput = document.getElementsByName('product_price')[0];
        const quantityInput = document.getElementsByName('product_quantity')[0];

        if (!validateImage(imgInput)) return false;
        validateName(nameInput);
        validateCategory(categoryInput);
        if (!priceInput.checkValidity()) {
            alert('Product price must be a valid number!');
            priceInput.value = '';
            return false;
        }
        if (!quantityInput.checkValidity()) {
            alert('Product quantity must be a valid number!');
            quantityInput.value = '';
            return false;
        }
        return true;
      }








row.getElementsByClassName("product-cell image")[0].getElementsByTagName("input")[0].onchange = function() {
let reader = new FileReader();
reader.onload = function(e) {
document.getElementById("product-image").src = e.target.result;
}

reader.readAsDataURL(this.files[0]);
};

row.getElementsByClassName("product-cell category")[0].getElementsByTagName("input")[0].focus();
}

function cancel_update(id,img,name,category,price,stock) {
let row = document.getElementById(id);
row.innerHTML = `
<div class="product-cell image">
<img src="${img}" alt="product">
<span>${name}</span>
</div>
<div class="product-cell category">${category}</div>
<div class="product-cell status-cell">
<span class="cell-label">Status:</span>
<span class="status active"> active</span>
</div>
<div class="product-cell price">${price}</div>
<div class="product-cell stock">${stock}</div>
<div class="product-cell price"><button class="button-9" role="update" onclick="mini_update(${id})">update</button></div>
<div class="product-cell price"><button class="button-9" role="button">delete</button></div>
`;
}










function validateImage(input) {
    const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    const fileName = input.value;
    const fileExtension = fileName.split('.').pop().toLowerCase();
    if (!allowedExtensions.includes(fileExtension)) {
        alert('Invalid file type! Please choose an image file (JPG, JPEG, PNG, GIF).');
        input.value = '';
        return true;
    }
    return true;
}

function validateName(input) {
    if (input.value.length < 2) {
        alert('Product name must be at least 2 characters long!');
        input.value = '';
    }
}

function validateCategory(input) {
    if (input.value.length < 2) {
        alert('Product category must be at least 2 characters long!');
        input.value = '';
    }
}

function validatePrice(input) {
    if (input.value <= 0) {
        alert('Product price must be greater than 0!');
        input.value = '';
    }
}

function validateQuantity(input) {
    if (input.value <= 0) {
        alert('Product quantity must be greater than 0!');
        input.value = '';
    }
}

function validateForm() {
    const imgInput = document.getElementsByName('product_img')[0];
    const nameInput = document.getElementsByName('product_name')[0];
    const categoryInput = document.getElementsByName('product_des')[0];
    const priceInput = document.getElementsByName('product_price')[0];
    const quantityInput = document.getElementsByName('product_quantity')[0];

   
    validateName(nameInput);
    validateCategory(categoryInput);
    if (!priceInput.checkValidity()) {
        alert('Product price must be a valid number!');
        priceInput.value = '';
        return false;
    }
    if (!quantityInput.checkValidity()) {
        alert('Product quantity must be a valid number!');
        quantityInput.value = '';
        return false;
    }
    return true;
  }











function  mini_add(){
let row = document.getElementById("demo11");
row.innerHTML += `


<form  action="../../View/addproduct.php" method="post" class="products-row" onsubmit="return validateForm()">
                
                <button class="cell-more-button"  >
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </button>
                
                <div class="product-cell image" >
                
                <input type="url" name="product_img" size="10" >
                <span>   <input type="text" name="product_name" size="5" >  </span>
                
                </div>
                <input type="text" name="product_des" style=" padding: 20px 10px; line-height: 28px " >
                <div class="product-cell category"><span class="cell-label">  </span></div>
                
                <div class="product-cell status-cell">
                <span class="cell-label">Status:</span>
                <span class="status active"> active</span>
                </div>
                <div class="product-cell price"><span class="cell-label">price:</span> <input type="number" name="product_price" size="10" > </div>
                <div class="product-cell stock"><span class="cell-label">quantity:</span> <input type="number" name="product_quantity" size="10" >  </div>
                
                <div class="product-cell price"><span class="cell-label"></span>
                
                <input type="submit" name="sub" value="add" >
                
                </form > 
                

                    
                   

</div>  `
}


</script>
        

                     <?php
               
                    
foreach ($list as $product  ) {
  

 
  $list1 = $productCspec->listproductspec($product['product_id'] );
  


//  $imageURL = 'uploads/'.$product["product_img"];
?> 

<div class="products-row" id=<?=$product['product_id'] ?>>

                       <button class="cell-more-button"  >
                         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                       </button>
                       
                         <div class="product-cell image" >
                           <img src=  <?= $product['product_img']; ?> alt="product" id="imgg">
                           <span>  <?= $product['product_name']; ?> </span>
                         </div>
                       <div class="product-cell category"><span class="cell-label">Category:</span><?= $product['product_des']; ?></div>
                       <div class="product-cell status-cell">
                         <span class="cell-label">Status:</span>
                         <span class="status active"> active</span>
                       </div>
                       <div class="product-cell price"><span class="cell-label">price:</span><?= $product['product_price']; ?>$</div>
                       <div class="product-cell stock"><span class="cell-label">quantity:</span><?= $product['product_quantity']; ?></div>
                       <div class="product-cell price"><span class="cell-label"></span>



                       <?php

$k=0;
foreach ($list1 as $productspec  ) {
  if(!empty($productspec)) {
 $k=1;
?>




                       <div class="box">
	<a class="button" href="#popup<?=$product['product_id'] ?>">Le</a>
</div>

<div id="popup<?=$product['product_id'] ?>" class="overlay">
	<div class="popup">


  

  <div class="containershop">
  <div class="images">
    <img class="aaa" src= <?= $product['product_img']; ?> style=" width: 290px;
  margin-top: 47px; height : 200px;  " />
  </div>  
  <div class="slideshow-buttons">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>

  <p class="pick">choose size</p>
  <div class="sizes">
<script>
  function mini_change(a,b){

    document.getElementsByClassName("productshop")[0].innerHTML=`\n  
      <p>Women's Running Shoe</p>\n 
         <h1>Nike Epic React Flyknit</h1>\n 
         <h2>`+a+`</h2>\n   
          <p class="desc">t. `+b+`</p>\n    <div class="buttons">\n      <button class="add">Add to Cart</button>\n
          <button class="like"><span>♥</span></button>\n    </div>\n  `



  }
  function cc(){
    a=document.getElementsByName("dimensions_ max2")[0].value;
    b=document.getElementsByName("dimensions_ min2")[0].value;
    c=document.getElementsByName("price")[0].value;
    d=document.getElementsByName("wight")[0].value;
    if (isNaN(a) || isNaN(b) || isNaN(c) || isNaN(d)) {
    alert("Please enter numeric values for dimensions, price, and weight.");
    return false ;
  }

  // Error handling
  if (a <= 0 || b <= 0 || c <= 0 || d <= 0) {
    alert("Values must be greater than zero.");
    return false ;
  }
return true ;
    



  }
  function miniupdate2(a,b,c,d) {

 document.getElementsByClassName("containershop")[0].innerHTML =`
 
 <div class="images">
    <img class="aaa" src= <?= $product['product_img']; ?> style=" width: 290px;
  margin-top: 47px; height : 200px;  " />
  </div>  
  <div class="slideshow-buttons">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>

  <p class="pick">choose size</p>
  <div class="sizes">




<datalist id="slider-list">
  <option>0</option>
  <option>10</option>
  <option>20</option>
  <option>30</option>
  <option>40</option>
  <option>50</option>
  <option>60</option>
  <option>70</option>
  <option>80</option>
  <option>90</option>
  <option>100</option>
</datalist>
<main>
  <div class="progress-wrapper">
    <div class="progress">
    </div>
  </div>
  <input type="range" id="slider" list="slider-list" style=" width : 200px" />
</main>


 



</div>
<form  action="../../View/updateproductspec.php" method="post" class="products-row" onsubmit="return cc()">
<input type="hidden" name="id" value="<?=$productspec['id_spec'] ?>"  />
<div class="productshop">
    <p>Women's Running Shoe</p>
    <h1> price max :</h1>
   <input type="text"  name="price"  value=`+a +`/>
    <p class="desc" name="dimensions_ max " >dimensions max   : <input type="text" name="dimensions_ max2" value=`+b +` >  <br>     dimensions min :  <input type="text" name="dimensions_ min2" value=`+c +` > <br> wieght per cm <input type="text" name="wight" value=`+d +` ></p>
    <div class="buttons">
      <button class="add" >update </button>
      <button class="like"><span></span></button>
    </div>
  </div>
  </form> 
  <a class="close" href="#">&times;</a>
		
	</div>

  </div>
    
	
`;



  }
  </script>



<datalist id="slider-list">
  <option>0</option>
  <option>10</option>
  <option>20</option>
  <option>30</option>
  <option>40</option>
  <option>50</option>
  <option>60</option>
  <option>70</option>
  <option>80</option>
  <option>90</option>
  <option>100</option>
</datalist>
<main>
  <div class="progress-wrapper">
    <div class="progress">
    </div>
  </div>
  <input type="range" id="slider" list="slider-list" style=" width : 200px" />
</main>


 



</div>
<form  action="../../View/delproductspec.php" method="post" class="products-row" onsubmit="true">
      
<div class="productshop">
    <p>Women's Running Shoe</p>
    <h1>Nike Epic React Flyknit</h1>
    
    <h2 id="price123" valuemax=<?=$productspec['price_max'] ?> valuemin= <?=$product['product_price'] ?>  value=<?=  ( $productspec['price_max'] + $product['product_price'] ) / 2;    ?> >$<?=  ( $productspec['price_max'] + $product['product_price'] ) / 2;    ?></h2>
    <p class="desc" id="price321"  valuemax="<?=$productspec['dimensions_max'] ?>" valuemin="<?=$productspec['dimensions_min'] ?>"  valuew="<?=$productspec['weight'] ?>" > dimensions :  <?= ($productspec['dimensions_max'] + $productspec['dimensions_min'] )/2 ?>   </p>
    
    <div class="buttons">
    <input type="hidden" value="<?=$productspec['id_spec'] ?> " name="id">
      <button class="add" onclick="miniupdate2(<?=$productspec['price_max'] ?> , <?=$productspec['dimensions_max'] ?>,<?=$productspec['dimensions_min'] ?>,<?=$productspec['weight'] ?>)"> update</button>
    
      <button class="like" type="sumbit"><span>del</span></button>

    </div>
  </div>
  <a class="close" href="#">&times;</a>
		
	</div>
  </form>

  </div> </div> 


<?php
} } if($k==0) {
?>

<div class="box">
	<a class="button" href="#popup<?=$product['product_id'] ?>">add</a>
</div>

<div id="popup<?=$product['product_id'] ?>" class="overlay">
	<div class="popup">


  

  <div class="containershop">
  <div class="images">
    <img class="aaa" src= <?= $product['product_img']; ?> style=" width: 290px;
  margin-top: 47px; height : 200px;  " />
  </div>  
  <div class="slideshow-buttons">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>

  <p class="pick">choose size</p>
  <div class="sizes">
<script>
  function mini_change(a,b){

    document.getElementsByClassName("productshop")[0].innerHTML=`\n  
      <p>Women's Running Shoe</p>\n 
         <h1>Nike Epic React Flyknit</h1>\n 
         <h2>`+a+`</h2>\n   
          <p class="desc">t. `+b+`</p>\n    <div class="buttons">\n      <button class="add">Add to Cart</button>\n
          <button class="like"><span>♥</span></button>\n    </div>\n  `


  }

  </script>



<datalist id="slider-list">
  <option>0</option>
  <option>10</option>
  <option>20</option>
  <option>30</option>
  <option>40</option>
  <option>50</option>
  <option>60</option>
  <option>70</option>
  <option>80</option>
  <option>90</option>
  <option>100</option>
</datalist>
<main>
  <div class="progress-wrapper">
    <div class="progress">
    </div>
  </div>
  <input type="range" id="slider" list="slider-list" style=" width : 200px" />
</main>


 



</div>
<form  action="../../View/addproductspec.php" method="post" class="products-row" onsubmit="return cc()">
<input type="hidden" name="id" value="<?=$product['product_id'] ?>"  />
<div class="productshop">
    <p>Women's Running Shoe</p>
    <h1> price max :</h1>
   <input type="text"  name="price" />
    <p class="desc" name="dimensions_ max ">dimensions max   : <input type="text" name="dimensions_ max2"  >  <br>     dimensions min :  <input type="text" name="dimensions_ min2" > <br> wieght per cm <input type="text" name="wight" ></p>
    <div class="buttons">
      <button class="add" >Add </button>
      <button class="like"><span></span></button>
    </div>
  </div>
  </form> 
  <a class="close" href="#">&times;</a>
		
	</div>

  </div> </div> 


<?php
} 
?>






                      














</div>
                       <div class="product-cell price"><span class="cell-label"></span><button class="button" role="update" onclick="mini_update(<?=$product['product_id'] ?>)">update</button></div>
                       <div class="product-cell price"><span class="cell-label"></span>
                       <form  name="testF" id="testd" action="../../View/deleteproduct.php" method="post" >
                       <input type="hidden" name="idpro" value= <?= $product['product_id']; ?> size="5"/> 
                           <input type="submit" name="sub" value="delete" /> 
                           </form>
                         </div>
                           

                     </div>     
                     




             <?php
} 

?>


            
            </section>
        </main>
        <script src="../assets/js/test.js"></script>
         <script src="../assets/js/Progress_Bar.js"></script>
  <!--   Core JS Files   -->

</body>

</html>