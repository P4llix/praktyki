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
		<div class="tlo"></div>
		<div class="container-fluid h-100">
			<div class="row align-items-center h-100">
				<div class="main col-md-4 col-sm-10 col-xs-10 px-5 pt-3 pb-3 mx-auto">
					<form action="" method="post">
						Podaj login a na przypisany e-mail przyjdzie przypomnienie hasla <br> 
                        <input type="text" class="log mb-4" name="zapomianiymail"> <br>
                        <input type="submit" value="Wyślij" class="btn btn-primary" name="wyslij">
                        <a href="index.php"><button type="button" class="btn btn-secondary">Wróc</button></a>
					</form>
				</div>
			</div>
		</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

<?php

	if(isset($_POST['wyslij'])){
		
		$nowehaslo = date('YmdHis');
		$nowehaslo = hash('sha256', $nowehaslo);
		
		$adres = $_POST['zapomnianymail'];
		$temat = "Zmiana hasła";

		$tresc = "Haslo zostalo zmienione na:  <i>".$nowehaslo."</i>";

		mail($adres, $temat, $tresc);

		mysql_query("UPDATE logowanie SET haslo='".$nowehaslo."' WHERE mail='".$adres."'");


	}





?>