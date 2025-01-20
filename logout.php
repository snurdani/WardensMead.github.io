<?php

session_start();

if(isset($_SESSION['auth']))
{
  unset($_SESSION['auth']);
  unset($_SESSION['auth_user']);
  $_SESSION['message'] = "Uspesno ste se odjavili!";
}

header('location: Pocetna.php')
?>