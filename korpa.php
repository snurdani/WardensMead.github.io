<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WM-Korpa</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/255a05d4da.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>
  <section id="header">
    <a href="Pocetna.php"><img src="img/banner/wmlogo.png" class="logo" alt=""></a>

    <div>
      <ul id="navbar">
        <li><a href="Pocetna.php">Home</a></li>
        <li><a href="categories.php">Shop</a></li>
        <li><a href="novosti.php">Novosti</a></li>
        <li><a href="onama.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a class="active" href="korpa.php"><i class="fa-solid fa-cart-shopping"></i></a> </li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
      </ul>
    </div>
        <div id="mobile">
            <a href="korpa.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"> </i>
        </div>
  </section>

	<section id="page-header" class="onama-header">

		<h2>Korpa</h2>
		<p>Molimo vas da proverite vasu korpu</p>
  
	</section>

  <section id="korpa" class="section-p1">
    <table width="100%">
      <thead>
        <tr>
          <td>Izbaci</td>
          <td>Slika</td>
          <td>Produkt</td>
          <td>Cena</td>
          <td>Kolicina</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href=""><i class="far fa-times-circle"></i></a></td>
          <td><img src="img/banner/crveni.jpg" alt=""></td>
          <td>Ruby Medovina Classic Alc 15%</td>
          <td>1500din</td>
          <td><input type="number" value="1"></td>
        </tr>
        <tr>
          <td><a href=""><i class="far fa-times-circle"></i></a></td>
          <td><img src="img/banner/plavi.jpg" alt=""></td>
          <td>Mint Medovina Alc 15%</td>
          <td>1500din</td>
          <td><input type="number" value="1"></td>
        </tr>
        <tr>
          <td><a href=""><i class="far fa-times-circle"></i></a></td>
          <td><img src="img/banner/kutija.png" alt=""></td>
          <td>WM Kutija</td>
          <td>2500din</td>
          <td><input type="number" value="1"></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section id="korpa-dodaj" class="section-p1">
    <div id="kupon">
      <h3>Dodajte Kupon za Popust</h3>
      <div>
        <input type="text" placeholder="Upisite broj vaseg Kupna">
        <button class="normal">Dodaj</button>
      </div>
    </div>

    <div id="subtotal">
      <h3>Ukupno</h3>
      <table>
        <tr>
          <td>korpa total</td>
          <td>5500 din</td>
        </tr>
        <tr>
          <td>Postarina</td>
          <td>Besplatna</td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>5500 din</strong></td>
        </tr>
      </table>
      <button class="normal">Prosledite Kupovinu</button>
    </div>

  </section>

	<script src="script.js"></script>	
</body>

<?php
    include("footer.php");
?>
