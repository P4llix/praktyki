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
       $_SESSION['status'] = mysql_fetch_row(mysql_query("SELECT status FROM logowanie WHERE mail = '".$mail."';"));
       $mlogin = $_SESSION['mlogin'];
       $_SESSION['login'] = $mlogin;
       $status = $_SESSION['status'];
       
      mysql_query("UPDATE logowanie SET dataLogSu='".$date."' WHERE mail='".$mail."'");

    if($status[0] == "Odblokowany"){
        header("location: home.php");
    }
    elseif($status[0] == "Zablokowany"){
        echo '<script language="javascript">';
        echo "alert('Konto na które próbujesz sie zalogować jest zablokowane')";

        echo "<div class='modal' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            <div class='modal-body'>
              Konto zablokowane
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
            </div>
          </div>
        </div>
      </div>";

        header('Location: index.php');

    }

   }
   else {

        mysql_query("UPDATE logowanie SET dataLogDe='".$date."' WHERE mail='".$mail."'");

    session_destroy();
    header('Location: index.php');

   }
}

?>