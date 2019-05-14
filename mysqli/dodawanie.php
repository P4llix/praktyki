<?php

if(isset($_POST['dodawanie'])){

if($_POST['mail'] != "" && $_POST['login'] != "" && $_POST['imie'] != "" && $_POST['nazwisko'] != "" ){

    if (mysql_num_rows(mysql_query("SELECT login FROM logowanie WHERE login = '".$_POST['login']."';")) == 0){

        if (mysql_num_rows(mysql_query("SELECT mail FROM logowanie WHERE mail = '".$_POST['mail']."';")) == 0){
  
            mysql_query("INSERT INTO logowanie (mail, login, imie, nazwisko, status) VALUES ('".$_POST['mail']."','".$_POST['login']."','".$_POST['imie']."','".$_POST['nazwisko']."','".$_POST['status']."')");

        }
        else{

            echo "<br>podany mail już istnieje";

        }
    }
    else{

        echo "<br>Podany Login już istnieje.";

    }
}



}
?>