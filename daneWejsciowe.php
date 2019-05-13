<?php


session_start();
mysql_connect("localhost","root","");
mysql_select_db("login");

if($_SESSION['zalogowany'] != true){
  header("Location: index.php");
}

$imie = $_SESSION['imie'];
$mail = $_SESSION['mail'];
$haslo = $_SESSION['haslo'];
$login = $_SESSION['mlogin'];
$nazwisko = $_SESSION['nazwisko'];
$dataLogDe = $_SESSION['dataLogDe'];
$dataLogSu = $_SESSION['dataLogSu'];



?>