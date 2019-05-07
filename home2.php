<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("login");


$login = $_SESSION['mlogin'];
$dataLogSu = $_SESSION['dataLogSu'];
$dataLogDe = $_SESSION['dataLogDe'];
$mail = $_SESSION['mail'];
?>
<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>		


        <!-- Menu -->
        <div class="container-fluid nawigacyjne">
            <div class="row">
    <nav class="navbar navbar-light navbar-1 white col-1 ml-auto ">

  <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent15">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="zmiana.php">Ustawienia konta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uzytkownicy.php">Zarządzanie kontami</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="wylogowanie.php">Wyloguj</a>
    </li>
    </ul>
 
    
  </div>

</nav>
</div>
</div>
<!--/.menu-->


<div class="tlo2"></div>
		<div class="container-fluid h-100">
			<div class="row align-items-center h-100">
                <div class=" col-md-6 col-sm-10 col-xs-10 px-5 py-3 mx-auto">

                    <div class="form-group my-4">
                        <label for="formGroupExampleInput">Login</label>
                        <p type="text" class="form-control text-dark" id="formGroupExampleInput"><?php echo $login[0];?></p>
                    </div>


                    <div class="form-group my-4">
                        <label for="formGroupExampleInput">E-mail</label>
                        <p type="text" class="form-control text-dark" id="formGroupExampleInput"><?php echo $mail;?></p>
                    </div>                

                    <div class="form-group my-4">
                        <label for="formGroupExampleInput">Data ostatniego pozytywnego logowania</label>
                        <p type="text" class="form-control text-dark" id="formGroupExampleInput"><?php echo $dataLogSu[0];?></p>
                    </div>

                    <div class="form-group my-4">
                        <label for="formGroupExampleInput">Data ostatniego błędnego logowania</label>
                        <p type="text" class="form-control text-dark" id="formGroupExampleInput"><?php echo $dataLogDe[0];?></p>
                    </div>
                                                           

				</div>
			</div>
		</div>



    <script src="main.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>