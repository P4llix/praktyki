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
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            
              <span class="profile-text"><?php echo $login[0];?></span>
            

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
                <i class="fas fa-user-circle menu-icon"></i>
                </div>
                <div class="text-wrapper">
                <p class="profile-name"><?php echo $imie[0]." ".$nazwisko[0] ?></p>
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
            <a class="nav-link" href="zmiana.php" >
            <i class="fas fa-user-shield menu-icon"></i>
              <span class="menu-title">Zarządzanie kontem</span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="uzytkownicy.php">
            <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">Dodaj użytkowników</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modyfikacja.php">
            <i class="fas fa-user-cog menu-icon"></i>
              <span class="menu-title">Modyfikuj użytkownika</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wylogowanie.php">
            <i class="fas fa-sign-out-alt menu-icon"></i>
              <span class="menu-title">Wyloguj się</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Ustawienia uzytkownika</h4>
                      <div class="wyswietlanie" name="wyswietlanie"></div>
                      <p class="card-description">
                        Zabezpieczenia
                      </p>
                      <form method="post" action="" class="forms-sample " autocomplete="off">
                      <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> E-mail</label>
                          <div class="col-sm-6">
                            <input type="email" class="form-control border border-primary" id="email"placeholder="Enter email" name="zmienionyMail" value="">
                          </div>
                        </div>
                        <div class="form-group row" id="potwierdzenieMaila">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Wpisz ponownie E-mail</label>
                          <div class="col-sm-6">
                            <input type="email" class="form-control" id="potwierdzenieMaila"  name="potwierdzonyMail" value="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Hasło</label>
                          <div class="col-sm-6">
                            <input type="password" class="form-control border border-primary" id="exampleInputPassword2" name="zmienioneHaslo">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Potwierdź hasło</label>
                          <div class="col-sm-6">
                            <input type="password" class="form-control" id="potwierdzoneHaslo" name="potwierdzoneHaslo">
                          </div>
                        </div>
                        <h4 class="card-title mt-3">Dane osobowe</h4>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Imie</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control " name="imie" value="<?php echo $imie[0] ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nazwisko</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="nazwisko" value="<?php echo $nazwisko[0] ?>">
                          </div>
                        </div>                        
                        <button type="submit" class="btn btn-success mr-2" name="zapisywanie">Zapisz</button>

                        <button class="btn btn-light">Anuluj</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
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
  <script src="main.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

</body>

</html>
<?php 

if(isset($_POST['zapisywanie'])){

    $zmienionyMail = $_POST['zmienionyMail'];
    $potwierdzonyMail = $_POST['potwierdzonyMail'];


    if($zmienionyMail == $potwierdzonyMail && $potwierdzonyMail != ""){
        
            mysql_query("UPDATE logowanie SET Mail='".$zmienionyMail."' WHERE mail='".$mail."'");
            $_SESSION['mail'] = $zmienionyMail;

            echo '<script language="javascript">';
            echo "alert('Poprawnie zmieniono maila')";
            echo '</script>';

        
        }
    elseif($potwierdzonyMail != $zmienionyMail){

      echo '<script language="javascript">';
      echo "alert('Podane maile są różne)";
      echo '</script>';
        }        
    

    $zmienioneHaslo = $_POST['zmienioneHaslo'];
    $potwierdzoneHaslo = $_POST['potwierdzoneHaslo'];

    if($zmienioneHaslo == $potwierdzoneHaslo && $potwierdzoneHaslo != ""){

        $zmienioneHaslo = base64_encode($zmienioneHaslo);
        mysql_query("UPDATE logowanie SET haslo='".$zmienioneHaslo."' WHERE mail='".$mail."'");
        $_SESSION['haslo'] = $zmienionyMail;

          echo '<script language="javascript">';
          echo "alert('Poprawnie zmieniono haslo')";
          echo '</script>';
        
      }
      elseif($potwierdzoneHaslo != $zmienioneHaslo){
          echo '<script language="javascript">';
          echo "alert('Podane hasła są różne')";
          echo '</script>';
      }


      if($imie != $_POST['imie']){

        mysql_query("UPDATE logowanie SET imie='".$_POST['imie']."' WHERE mail='".$mail."'");
        $_SESSION['imie'] = $_POST['imie'];

        
      }
       
      
      if($nazwisko != $_POST['nazwisko']){

        mysql_query("UPDATE logowanie SET nazwisko='".$_POST['nazwisko']."' WHERE mail='".$mail."'");
        $_SESSION['nazwisko'] = $_POST['nazwisko'];

        
      }      

  }


?>