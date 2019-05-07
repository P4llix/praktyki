<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("login");
 

 
if (isset($_POST['loguj']))
{

    $con = mysql_connect("localhost", "root", "");
   $mail = $_POST['mail'];
   $haslo = $_POST['haslo'];
   $haslo = base64_encode($haslo);
   $date = date('Y-m-d H:i:s');
   
   if (mysql_num_rows(mysql_query("SELECT mail, haslo FROM logowanie WHERE mail = '".$mail."' AND haslo = '".$haslo."';")) > 0)
   {
       
       $_SESSION['zalogowany'] = true;
       $_SESSION['mail'] = $mail;
       $_SESSION['mlogin'] = mysql_fetch_row(mysql_query("SELECT Login FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['dataLogSu'] = mysql_fetch_row(mysql_query("SELECT dataLogSu FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['dataLogDe'] = mysql_fetch_row(mysql_query("SELECT dataLogDe FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['imie'] = mysql_fetch_row(mysql_query("SELECT imie FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['nazwisko'] = mysql_fetch_row(mysql_query("SELECT nazwisko FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['haslo'] = mysql_fetch_row(mysql_query("SELECT haslo FROM logowanie WHERE mail = '".$mail."';"));
       $mlogin = $_SESSION['mlogin'];
       $_SESSION['login'] = $mlogin;
       
      mysql_query("UPDATE logowanie SET dataLogSu='".$date."' WHERE mail='".$mail."'");

 
    echo "zalogowano na: <i>".$mlogin[0]."</i>";
    header("location: home.php");


   }
   else {

        mysql_query("UPDATE logowanie SET dataLogDe='".$date."' WHERE mail='".$mail."'");

    session_destroy();
    header('Location: index.php');

   }
}

?>