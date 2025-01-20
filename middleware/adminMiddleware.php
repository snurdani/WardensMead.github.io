<?php

include('../funkcije/myfunctions.php');

if(isset($_SESSION['auth']))
{

  if($_SESSION['role_as'] != 1)
  {
    redirect("../Pocetna.php", "Nemate pristup ovom sadrzaju");
  }

}
else
{
  redirect("../login.php", "Ulogujte se da nastavite");
}

?>