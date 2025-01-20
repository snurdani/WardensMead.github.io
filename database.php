<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "prijava";

    $con = mysqli_connect($host, $username, $password, $database);

    if(!$con)
    {

      die("Ne uspesna Konekcija" . mysqli_connect_error());

    }

?>