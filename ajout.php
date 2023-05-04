<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
// Establish database connection

$pdo = new PDO("mysql:host=localhost;dbname=crud_client", "root", "");

// CREATE operation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])) {
  $id = $_POST['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $gender = $_POST['gender'];
  $phone= $_POST['phone'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $type= $_POST['type'];
 
 
  $stmt = $pdo->prepare("INSERT INTO clients (id, first_name, last_name, gender, phone, email, password, type) VALUES (:id, :first_name, :last_name, :gender, :phone, :email, :password, :type)");
  $stmt->bindParam(':id', $id,PDO::PARAM_STR);
  $stmt->bindParam(':first_name', $first_name,PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $last_name,PDO::PARAM_STR);
  $stmt->bindParam(':gender', $gender,PDO::PARAM_STR);
  $stmt->bindParam(':phone', $phone,PDO::PARAM_STR);
  $stmt->bindParam(':email', $email,PDO::PARAM_STR);
  $stmt->bindParam(':password', $password,PDO::PARAM_STR);
  $stmt->bindParam(':type', $type,PDO::PARAM_STR);
  $stmt->execute();

  echo "Données enregistrées avec succès!";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Table
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
  <link id="pagestyle" href="../assets/css/argon-dashboard1.css?v=2.0.4" rel="stylesheet" />
</head>




  <div class="min-height-300 bg-primary position-absolute w-100" >
  <img src="../assets/img/greenhub.png"  alt="main_logo">
  </div>
  <img src="../assets/img/greenhub.png"  alt="main_logo">
  <body class="g-sidenav-show   bg-gray-100">
    

 

  
    <div class="sidenav-header">
      
        
        <span class="ms-1 font-weight-bold">GreenHub </span>
      </a>
   
        </li>
        
    
    <



              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
         
               


               
                    <h4 style="text-align:center"> sign up</h4>






                 





                  <tbody>
                    <form method="POST"  onsubmit="return validateForm(event)" enctype="multipart/form-data" action="../../../../crud/front/index.php">
                      <label hidden for="id">id:</label>
                      <input hidden type="text" id="id" name="id" ><br><br>
                    
                      <label for="first_name">first_name:</label>
                      <input type="text" id="first_name" name="first_name" ><br><br>
                    
                      <label for="last_name">last_name:</label>
                      <input type="text" id="last_name" name="last_name" ><br><br>
                    
                      <label for="gender">gender:</label>
                      <select name="gender" id="gender">
    <option value="">-Select Gender-</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
</select><br><br>
                      <label for="phone">phone:</label>
                      <input type="text" id="phone" name="phone" ><br><br>

                      <label for="email">email:</label>
                      <input type="text" id="email" name="email" ><br><br>

                      <label for="password">password:</label>
                      <input type="text" id="password" name="password" ><br><br>
                    
                      <label for="type"> type:</label> 
                      <select name="type" id="type">
    <option value="">-Select type-</option>
    <option value="client">client</option>
    <option value="admin">admin</option>
</select><br><br>
                    
                     <p style="align=center">   <input  type="submit" value="sign up" name="insert"> </p>
                      
                      

                    </form>
                    
                    <script>
                      function validateForm(event) {
  // Récupérer les valeurs des champs de formulaire
  const id = document.getElementById("id").value;
  const firstName = document.getElementById("first_name").value;
  const lastName = document.getElementById("last_name").value;
  const gender = document.getElementById("gender").value;
  const phone = document.getElementById("phone").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const type = document.getElementById("type").value;

  // Vérifier si les champs obligatoires sont remplis
  if (firstName === "" || lastName === "" || gender === "" || phone === "" || email === "" || password === "" || type === "") {
    alert("Veuillez remplir tous les champs obligatoires.");
    event.preventDefault();
    return false;
  }
  // Vérifier que le champ "id" ne contient que des chiffres
  //const idRegex = /^[0-9]+$/;
  //if (!idRegex.test(id)) {
    //alert("Le champ 'id' ne doit contenir que des chiffres.");
    //event.preventDefault();
    //return false;
 // }
// Vérifier que les champs "first_name" et "last_name" ne contiennent que des lettres
const nameRegex = /^[A-Za-z]+$/;
  if (!nameRegex.test(firstName)) {
    alert("Le champ 'first_name' ne doit contenir que des lettres.");
    event.preventDefault();
    return false;
  }
  if (!nameRegex.test(lastName)) {
    alert("Le champ 'last_name' ne doit contenir que des lettres.");
    event.preventDefault();
    return false;
  }
  // Vérifier le format de l'e-mail
  const emailRegex = /\S+@\S+\.\S+/;
  if (!emailRegex.test(email)) {
    alert("Veuillez saisir une adresse e-mail valide.");
    event.preventDefault();
    return false;
  }

  // Vérifier le format du numéro de téléphone
  const phoneRegex = /^\d{8}$/;
  if (!phoneRegex.test(phone)) {
    alert("Veuillez saisir un numéro de téléphone valide (8 chiffres).");
    event.preventDefault();
    return false;
  }

  // Si toutes les validations sont passées, renvoyer true pour soumettre le formulaire
  return true;
}
</script>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Green Hub</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Green Hub</a>
                </li>
                
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
 
        <div class="float-end mt-4">
          
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        
        
        
        
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>