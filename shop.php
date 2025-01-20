<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WM-Shop</title>
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
				<li><a href="categories.php">Kategorije</a></li>
				<li><a class="active" href="shop.php">Shop</a></li>
				<li><a href="novosti.php">Novosti</a></li>
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

	<section id="page-header">

		<h2>Ukus meda i vina</h2>
		<p>Za kupovinu iznad 3000 din. besplatna dostava!</p>
  
	</section>

	<section id="produkt1" class="section-p1">
		<div class="pro-container">
			<div class="pro" onclick ="window.location.href='sprodukt.php'">
				<img src="img/banner/zlatni.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Zlatna Medovina Classic 15% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktc.php'">
				<img src="img/banner/crveni.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>RUBY Medovina 18% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktp.php'">
				<img src="img/banner/plavi.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Mint Medovina Sa Ukusom Mente 15% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktze.php'">
				<img src="img/banner/zeleni.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Gigner Medovina 15% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktlj.php'">
				<img src="img/banner/ljubicasti.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Lavander Medovina Sa Aromom Lavande 15% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktbr.php'">
				<img src="img/banner/braon.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Copper Medovina Polu Suva Sa 9% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktkut.php'">
				<img src="img/banner/kutija.png" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Warden's Mead Kutija Za Medovinu</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>2500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro" onclick ="window.location.href='sproduktkutv.php'">
				<img src="img/banner/kutijaSaMedovinom.png" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Warden's Mead Kutija Sa Medovinom</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>4500din</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
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