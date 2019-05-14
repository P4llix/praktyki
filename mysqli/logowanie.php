<?php 
include ("daneWejsciowe.php");
 

 
if (isset($_POST['loguj']))
{

   $mail = $_POST['mail'];
   $haslo = $_POST['haslo'];
   $haslo = base64_encode($haslo);
   $date = date('Y-m-d H:i:s');
   
   if ( mysql_num_rows( mysql_query($"SELECT mail, haslo FROM logowanie WHERE mail = '".$mail."' AND haslo = '".$haslo."';")) > 0)
   {
       
       $_SESSION['zalogowany'] = true;
       $_SESSION['mail'] = $mail;
       $_SESSION['mlogin'] =  mysqli_fetch_row( mysqli_query($db, "SELECT Login FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['dataLogSu'] =  mysqli_fetch_row( mysqli_query($db,  "SELECT dataLogSu FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['dataLogDe'] =  mysqli_fetch_row( mysqli_query($db,  "SELECT dataLogDe FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['imie'] =  mysqli_fetch_row( mysqli_query($db,  "SELECT imie FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['nazwisko'] =  mysqli_fetch_row( mysqli_query($db,  "SELECT nazwisko FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['haslo'] =  mysqli_fetch_row( mysqli_query($db,  "SELECT haslo FROM logowanie WHERE mail = '".$mail."';"));
       $_SESSION['status'] =  mysqli_fetch_row( mysqli_query($db,  "SELECT status FROM logowanie WHERE mail = '".$mail."';"));
       $mlogin = $_SESSION['mlogin'];
       $_SESSION['login'] = $mlogin;
       $status = $_SESSION['status'];
       
       mysqli_query($db,  "UPDATE logowanie SET dataLogSu='".$date."' WHERE mail='".$mail."'");

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

         mysqli_query($db,  "UPDATE logowanie SET dataLogDe='".$date."' WHERE mail='".$mail."'");

    session_destroy();
    header('Location: index.php');

   }
}

?>