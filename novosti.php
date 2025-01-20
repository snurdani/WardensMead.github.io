<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WM-Novosti</title>
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
        <li><a class="active" href="novosti.php">Novosti</a></li>
        <li><a href="onama.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a href="korpa.php"><i class="fa-solid fa-cart-shopping"></i></a> </li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
      </ul>
    </div>
        <div id="mobile">
            <a href="korpa.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"> </i>
        </div>
  </section>

	<section id="page-header" class="blog-header">

		<h2>Novosti o nama</h2>
		<p>Ovde postavljamo novosti o proizvodima i nase buduce lokacije</p>
  
	</section>

  <section id="blog">
    <div class="blog-box">
      <div class="blog-img">
        <img src="img/banner/kutijaSaMedovinom.png" alt="">
      </div>
      <div class="blog-details">
        <h4>WM Kutija sa Medovinom Kratkotrajna Ponuda Sad Na Stanju</h4>
        <p>Elegantna Kutija za Medovinu i ostala pica brendirana sa nasim logom ima samo 50 napravljenih zato budite brzi dok ih ne bude vise bilo.</p>
        <a href="#">SAZNAJ VISE</a>
      </div>
      <h1>20/9</h1>
    </div>
    <div class="blog-box">
      <div class="blog-img">
        <img src="img/banner/nb.jpg" alt="">
      </div>
      <div class="blog-details">
        <h4>Nocni Bazar</h4>
        <p>Vidimo se u nedelju u Rumi od 17h</p>
        <a href="#">SAZNAJ VISE</a>
      </div>
      <h1>2/8</h1>
    </div>
    <div class="blog-box">
      <div class="blog-img">
        <img src="img/banner/vecina.jpg" alt="">
      </div>
      <div class="blog-details">
        <h4>Sirok Novi Asortman</h4>
        <p>Evo jedna fotografija svih naših medovina na okupu. Mada uskoro moramo da radimo nove fotografije jer se opet širi asortiman.</p>
      </div>
      <h1>17/7</h1>
    </div>
  </section>

  <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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