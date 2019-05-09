<?php

if(isset($_POST['usuwanie'])){

  if (mysql_num_rows(mysql_query("SELECT mail, login FROM logowanie WHERE mail = '".$_POST['usuwanieMail']."' AND login = '".$_POST['usuwanieLogin']."';")) > 0){
      
    mysql_query("DELETE FROM logowanie WHERE login='".$_POST['usuwanieLogin']."' AND mail = '".$_POST['usuwanieMail']."'");
}
}

if(isset($_POST['dodawanie'])){

    if($_POST['mail'] != "" && $_POST['login'] != "" && $_POST['imie'] != "" && $_POST['nazwisko'] != "" ){
      
        mysql_query("INSERT INTO logowanie (mail, login, imie, nazwisko, status) VALUES ('".$_POST['mail']."','".$_POST['login']."','".$_POST['imie']."','".$_POST['nazwisko']."','".$_POST['status']."')");
    }



}
  
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

$result = mysql_query("SELECT * FROM logowanie");

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
?>