<?php
echo "asd";
if(isset($_POST['zapisanie'])){
    
  $szukajka = $_POST['dane'];
  $result = mysql_query("SELECT * FROM logowanie WHERE login='".$szukajka."'");

    if($result > 0 ){



      while($row = mysql_fetch_array($result)) {
        
        echo "
        <div class='form-group mt-5'>
        <label for='formGroupExampleInput'>ID</label>
        <input type='text' class='form-control idmodyfikacji' id='formGroupExampleInput' readonly value='".$row[0]."'>
        </div>";

        $row0 = $row[0];
        $row1 = $row[1];
        $row2 = $row[2];
        $row2 = base64_encode($row2);
        $row3 = $row[3];
        $row6 = $row[6];
        $row7 = $row[7];
        $row8 = $row[8];


  }                         
  
}
    elseif($_POST['szukajka'] == ""){
      echo "Prosze wpisac login";
    }
    else{
      echo "Nie znaleziono";
    }
  }



  // mysql_query("UPDATE logowanie SET login='".$row1."' WHERE mail='".$row3."'");  
  // mysql_query("UPDATE logowanie SET haslo='".$row2."' WHERE mail='".$row3."'");
  // mysql_query("UPDATE logowanie SET mail='".$row3."' WHERE mail='".$row3."'");
  // mysql_query("UPDATE logowanie SET imie='".$row6."' WHERE mail='".$row3."'");
  // mysql_query("UPDATE logowanie SET nazwisko='".$row7."' WHERE mail='".$row3."'");
  // mysql_query("UPDATE logowanie SET status='".$row8."' WHERE mail='".$row3."'");

?>
