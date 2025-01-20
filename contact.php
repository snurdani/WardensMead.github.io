<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WM-Contact</title>
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
        <li><a class="active" href="contact.php">Contact</a></li>
        <li id="lg-bag"><a href="korpa.php"><i class="fa-solid fa-cart-shopping"></i></a> </li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
      </ul>
    </div>
        <div id="mobile">
            <a href="korpa.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"> </i>
        </div>
  </section>

	<section id="page-header" class="onama-header">

		<h2>Kontakt Informacije</h2>
		<p>Za bilo kakva pitanja mozete ovde naci odgovore</p>
  
	</section>

  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>Posetite nas u Sremskim Karlovcima i na nocnom bazaru Novi Sad</span>
      <h2>Kontaktirajte nas</h2>
      <h3>Informacije</h3>

      <div>
        <li>
          <i class="fa-solid fa-map"></i>
          <p>Dimitrija Sabova 8, Sremski Karlovci, Serbia, 21205</p>
        </li>
        <li>
          <i class="fa-solid fa-envelope"></i>
          <p>Wardensmead@gmail.com</p>
        </li>
        <li>
          <i class="fa-solid fa-phone"></i>
          <p>062 422293</p>
        </li>
      </div>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2811.283042991937!2d19.936815972982934!3d45.2016076478908!2m3
      !1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b04a8abdde3db%3A0x70ab198f91b31b33!2sDimitrija%20Sabova%208%2C%20Sremski%20Karlovci!5e0!3m2!1sen!2
      srs!4v1692522108581!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <section id="form-details">
    <form action="">
      <span>Ostavite Nam Poruku</span>
      <h2>Zanima nas sta mislite o nasem proizvodu</h2>
      <input type="text" placeholder="Ime">
      <input type="text" placeholder="E-mail">
      <input type="text" placeholder="Tema">
      <textarea name="" id="" cols="30" rows="10" placeholder="Vasa Poruka"></textarea>
      <button class="normal">Posalji</button>
    </form>
  </section>

	<section id="novosti" class="section-p1 section-m1">
		<div class="newstext">
			<h4>Prijavite Se Za Novosti</h4>
			<p>Primajte Novosti Preko E-mail Adrese Saljemo Nove Ponude Mesecno</p>
		</div>
		<div class="form">
			<input type="text" placeholder="E-mail Adresa">
			<button class="normal">Prijavite Se</button>
		</div>
	</section>

	<script src="script.js"></script>	
</body>

<?php
    include("footer.php");
?>
