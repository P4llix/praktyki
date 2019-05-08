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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"> Wyszukaj użytkownika poprzez E-mail lub Login </h4>  
                      <form method="post" action="" class="forms-sample ">
                      <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wybierz</button>
                                    <div class="dropdown-menu">
                                        <button type="submit" name="pomailu" class="dropdown-item" href="#">Szukaj po mailu</button>
                                        <button type="submit" name="pologinie" class="dropdown-item" href="#">Szukaj po loginie</button>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" name="szukajka">
                            </div>
                        <button type="submit" class="btn btn-success mr-2" name="dodawanie">Dodaj</button>
                      
                    </div>
<?php

echo "<table class='table table-striped'>
<thead><tr>
<th> ID </th>
<th> Login </th>
<th> Mail </th>
<th> Poprawne logowanie </th>
<th> Błędne logowanie </th>
<th> Imie </th>
<th> Nazwisko </th>
<th> Status </th>
</tr></thead><tbody>";
if(isset($_POST['pomailu'])){

    $szukajka = $_POST['szukajka'];
    $resultID = mysql_query("SELECT ID FROM logowanie WHERE mail=".$szukajka."");


        echo "<tr>"; 
        echo "<td>".$resultID."</td>";

        //  if($result[8] == "Odblokowany"){ echo "<td><span class='badge badge-success'>".$result[8]."</span></td>"; }
        //  elseif($result[8] == "Zablokowany"){ echo "<td><span class='badge badge-danger'>".$result[8]."</span></td>"; }
         echo "</tr>";
    
    echo '</tbody></table>';
}


if(isset($_POST['pologinie'])){

    $szukajka = $_POST['szukajka'];
    $result = mysql_query("SELECT * FROM logowanie WHERE login = ".$szukajka."");
    
    while($row = mysql_fetch_array($result)) {
             echo "<tr>";
             echo "<td>".$row[0]."</td>";
             echo "<td>".$row[1]."</td>";
             echo "<td>".$row[3]."</td>";
             echo "<td>".$row[4]."</td>";
             echo "<td>".$row[5]."</td>";
             echo "<td>".$row[6]."</td>";
             echo "<td>".$row[7]."</td>";
             if($row[8] == "Odblokowany"){ echo "<td><span class='badge badge-success'>".$row[8]."</span></td>"; }
             elseif($row[8] == "Zablokowany"){ echo "<td><span class='badge badge-danger'>".$row[8]."</span></td>"; }
             echo "</tr>";
        }
        echo '</tbody></table>';
    }

?>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
</body>

</html>