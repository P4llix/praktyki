<?php
include "daneWejsciowe.php";

session_start();
session_unset(); 
session_destroy();

mysqli_close($db);
header('Location: index.php');



?>