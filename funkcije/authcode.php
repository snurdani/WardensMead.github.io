<?php


session_start();
include("../database.php");  
include("myfunctions.php");

if(isset($_POST['register']))
{
  $user = mysqli_real_escape_string($con, $_POST['user']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

  $check_email_query = "SELECT email FROM user WHERE email='$email' ";
  $check_email_query_run = mysqli_query($con, $check_email_query);

  if(mysqli_num_rows($check_email_query_run) > 0)
  {
    $_SESSION['message'] = "Email vec postoji";
    header('location: ../prijava.php');
  }
  else{

    if($password == $cpassword)
    {

      $insert_query = "INSERT INTO user (user, email, phone, password) VALUES ('$user', '$email', '$phone', '$password') ";
      $insert_query_run = mysqli_query($con, $insert_query);

      if($insert_query_run)
      {

        $_SESSION['message'] = "registracija uspesna";
        header('location: ../login.php');

      }
      else
      {

        $_SESSION['message'] = "ne uspesna registracija";
        header('location: ../prijava.php');

      }

    }
    else
    {

      $_SESSION['message'] = "Lozinke se ne uklapaju, pokusajte ponovo" ;
      header('location: ../prijava.php');

    }
  }
}

else if(isset($_POST['login']))
{
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $login_query = "SELECT * FROM user WHERE email ='$email' AND password='$password' ";
  $login_query_run = mysqli_query($con, $login_query);

  if(mysqli_num_rows($login_query_run) > 0)
  {
    $_SESSION['auth'] = true;

    $userdata = mysqli_fetch_array($login_query_run);
    $username = $userdata['user'];
    $useremail = $userdata['email'];
    $role_as = $userdata['role_as'];

    $_SESSION['auth_user'] = [
      'user' => $username,
      'email' => $useremail
    ];

    $_SESSION['role_as'] = $role_as;

    if($role_as == 1)
    {
      redirect("../admin/admin.php", "Dobro dosli na Dashboard");
    }
    else
    {
      redirect("../Pocetna.php", "Uspesno ste se ulogovali");
    }
  }
  else
  {
    redirect("../login.php", "Nepoznate informacije");
  }
}

?>