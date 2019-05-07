<?php 

session_start();
mysql_connect("localhost","root","");
mysql_select_db("login");

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
		<div class="tlo"></div>
		<div class="container-fluid h-100">
			<div class="row align-items-center h-100">
				<div class="main col-md-4 col-sm-10 col-xs-10 px-5 pt-3 pb-3 mx-auto">
					
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="zmienionyMail">
                            <button class="btn btn-primary ml-2" type="submit" name="przyciskMail">Zmień E-mail</button>
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="zmienionyMail">
                            <button class="btn btn-primary ml-2" type="submit" name="przyciskMail">Zmień hasło</button>
                        </div>    
                    </form>
                        <a href="home.php"><button type="text" class="btn btn-primary my-3">Wróć</button></a>                    
<?php

    if(isset($_POST['przyciskMail']))
{
    $mail = $_SESSION['mail'];
    $zmienionyMail = $_POST['zmienionyMail'];
    mysql_query("UPDATE logowanie SET Mail='".$zmienionyMail."' WHERE mail='".$mail."'");
    $_SESSION['mail'] = $zmienionyMail;
    header("location: home.php");
    

}


?>

				</div>
			</div>
		</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>