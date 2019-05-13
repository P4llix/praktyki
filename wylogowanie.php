<?php
include "daneWejsciowe";

session_start();
session_destroy();

mysql_close(mysql_connect("localhost","root",""));
header('Location: index.php');



?>