<?php

if(isset($_POST['usuwanie'])){

  if (mysql_num_rows(mysql_query("SELECT mail, login FROM logowanie WHERE mail = '".$_POST['usuwanieMail']."' AND login = '".$_POST['usuwanieLogin']."';")) > 0){
      
    mysql_query("DELETE FROM logowanie WHERE login='".$_POST['usuwanieLogin']."' AND mail = '".$_POST['usuwanieMail']."'");
}
}


  
echo "<table class='table table-striped' id='tabelka'>
<thead><tr>
<th> ID </th>
<th> Login </th>
<th> Mail </th>
<th> Poprawne logowanie </th>
<th> Błędne logowanie </th>
<th> Imie </th>
<th> Nazwisko </th>
<th> Status </th>
<th> Edycja </th>
</tr></thead><tbody>";

$result = mysql_query("SELECT * FROM logowanie");

while($row = mysql_fetch_array($result)) {

        $Tid = $row[0];
        $Tlogin = $row[1];
        $Thaslo = $row[2];
        $Tmail= $row[3];
        $Timie = $row[6];
        $Tnazwisko = $row[7];
        $Tstatus = $row[8];


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
         echo "<td>
         <input type='submit' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCentered".$Tid."' name='zapisanie".$row[0]."' value='Edytuj'>
        </td>";
         echo "</tr>";
         

?>

<div class="modal" id="exampleModalCentered<?php echo $Tid; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      <input type="hidden" name="edit_item_id" value="<?php echo $Tid; ?>">
        <div class='form-group'>
          <label for='formGroupExampleInput1'>Login</label>
          <input type='text' class='form-control border-primary' name='loginmodyfikacji' id='formGroupExampleInput1'  value='<?php echo $Tlogin; ?>'>
        </div>
        
        <div class='form-group'>
        <label for='formGroupExampleInput2'>Hasło</label>
        <input type='password' class='form-control border-primary' name='haslomodyfikacji' id='formGroupExampleInput2' value=''>
        </div>

        <div class='form-group'>
        <label for='formGroupExampleInput3'>Mail</label>
        <input type='text' class='form-control border-primary' name='mailmodyfikacji' id='formGroupExampleInput3' value='<?php echo $Tmail; ?>'>
        </div>
        
        <div class='form-group'>
        <label for='formGroupExampleInput4'>Imie</label>
        <input type='text' class='form-control border-primary' name='imiemodyfikacji' id='formGroupExampleInput4' value='<?php echo $Timie; ?>'>
        </div>     

        
        <div class='form-group'>
        <label for='formGroupExampleInput5'>Nazwisko</label>
        <input type='text' class='form-control border-primary' name='nazwiskomodyfikacji' id='formGroupExampleInput5'value='<?php echo $Tnazwisko; ?>'>
        </div>

        <?php

          if($Tstatus == "Odblokowany"){

          ?>

        <select name="statusmodyfikacji[]" class='statusmodyfikacji custom-select'>
          <option value='Odblokowany' selected >Odblokowany</option>
          <option value='Zablokowany'>Zablokoway</option>
         </select>

          <?php 

          }
          if($Tstatus == "Zablokowany"){

            ?>


            <select name="statusmodyfikacji[]" class='statusmodyfikacji custom-select'>
            <option value='Odblokowany'  >Odblokowany</option>
            <option value='Zablokowany'selected>Zablokoway</option>
           </select>


          <?php } ?>
        

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="zapisanie" >Zapisz</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"> Anuluj</button>
        </form>

         <?php

}
if(isset($_POST['zapisanie'])){
  echo "1";
  $idE = $_POST['edit_item_id'];

  $haslomodyfikacji = $_POST['haslomodyfikacji'];

  if ($haslomodyfikacji != ""){
    $haslomodyfikacji = base64_encode($haslomodyfikacji);
  }


  mysql_query("UPDATE logowanie SET login='".$_POST['loginmodyfikacji']."' WHERE ID='".$idE."'");  
  mysql_query("UPDATE logowanie SET haslo='".$haslomodyfikacji."' WHERE ID='".$idE."'");
  mysql_query("UPDATE logowanie SET mail='".$_POST['mailmodyfikacji']."' WHERE ID='".$idE."'");
  mysql_query("UPDATE logowanie SET imie='".$_POST['imiemodyfikacji']."' WHERE ID='".$idE."'");
  mysql_query("UPDATE logowanie SET nazwisko='".$_POST['nazwiskomodyfikacji']."' WHERE ID='".$idE."'");
  mysql_query("UPDATE logowanie SET status='".$_POST['statusmodyfikacji'][0]."' WHERE ID='".$idE."'");
  header('Location: uzytkownicy.php');
}


?>
          </tbody></table>

      </div>
    </div>
  </div>
</div>