<?php 

if(isset($_POST['szukaj'])){
  
      $szukajka = $_POST['szukajka'];
      $result = mysql_query("SELECT * FROM logowanie WHERE Mail='".$szukajka."' OR login = '".$szukajka."' OR imie = '".$szukajka."' OR nazwisko = '".$szukajka."' OR ID='".$szukajka."'OR status = '".$szukajka."'");

  if($result > 0){
echo "<table class='table table-striped'>
<thead><tr>
<th> ID </th>
<th> Login </th>
<th> Mail </th>
<th> Poprawne logowanie </th>
<th> Błędne logowanie </th>
<th> Imie </th>
<th> Nazwisko </th>
<th> Status </th>
</tr></thead><tbody>";



    while($row = mysql_fetch_array($result)) {
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
      echo "</tr>";
 }
 echo '</tbody></table>';
}
else{
  echo "<div class='btn btn-danger>Nie znaleziono</div>'";
}
}
?>    