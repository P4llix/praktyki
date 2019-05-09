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