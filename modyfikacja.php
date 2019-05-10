<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("login");


$imie = $_SESSION['imie'];
$mail = $_SESSION['mail'];
$haslo = $_SESSION['haslo'];
$login = $_SESSION['mlogin'];
$nazwisko = $_SESSION['nazwisko'];
$dataLogDe = $_SESSION['dataLogDe'];
$dataLogSu = $_SESSION['dataLogSu'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
</head>

<body>



  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">

      <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
        <li class="nav-item">
          <a href="uzytkownicy.php" class="nav-link"><i class="menu-icon fa fa-users"></i>Użytkownicy </a>
          </a>
        </li>
          <li class="nav-item">
            <a href="" class="nav-link"><i class="menu-icon fa fa-lock"></i>Bezpieczeństwo</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link"><i class="menu-icon fa fa-phone"></i>Kontakt</a>
            </a>
          </li>          
      </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Witaj,  <?php echo $imie[0]; ?>!</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
              </a>
              <a class="dropdown-item mt-2" href="Zmiana.php">
                Ustawienia konta
              </a>
              <a class="dropdown-item" href="Zmiana.php">
                Zmień hasło
              </a>
              <a class="dropdown-item" href="">
                Poczta
              </a>
              <a class="dropdown-item" href="wylogowanie.php">
                Wyloguj się
              </a>
            </div>
          </li>
            
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $login[0]; ?></p>
                  <p class="profile-name"><?php echo $mail; ?></p>
                  <div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">
            <i class="far fa-chart-bar menu-icon"></i>
              <span class="menu-title">Podsumowanie</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" >
            <i class="fas fa-tasks menu-icon"></i>
              <span class="menu-title">Projekty</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="menu-icon fa   fa-folder"></i>
              <span class="menu-title">Pliki</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="menu-icon fa fa-table"></i>
              <span class="menu-title">Tabele</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"><i class="fas fa-user-cog"></i> Modyfikacja użytkownika</h4>
                      <form method="post" action="" class="forms-sample " autocomplete="off">
                      <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Podaj login</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" placeholder="login" name="szukaniePoLoginie">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" name="pokazywanie">Pokaż</button>
                        <button class="btn btn-light">Anuluj</button>                                           
                        




</form>
                      </div>                     
                    </div>
                  </div>
                </div>               
                </div>                  
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>