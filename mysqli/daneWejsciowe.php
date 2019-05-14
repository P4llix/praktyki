<?php

session_start();


// $db = mysql_connect('localhost',$username, $password);
// mysql_select_db('10387911_praktyka',$db);


    $hostname = "localhost";
    $username = '10387911_praktyka';
    $password = 'Mikolaj@Jarek';
    $database = '10387911_praktyka';
    $db = new mysqli($hostname, $username, $password, $database) or die("Unable to connect");
    return $db;

// mysqli_connect("http://praktyka.gronet.pl/sql","10387911_praktyka","Mikolaj@Jarek");
// mysql_select_db("10387911_praktyka");

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