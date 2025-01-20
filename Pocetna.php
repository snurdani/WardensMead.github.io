<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WardensMead</title>
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
				<li><a class="active" href="Pocetna.php">Home</a></li>
				<li><a href="categories.php">Shop</a></li>
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
			<?php

		if(isset($_SESSION['message'])) 
		{
				?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Napomena!</strong> <?= $_SESSION['message']; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
				unset($_SESSION['message']);
		} 

		?>

	<section id="hero">
		<h4>Svet Medovine</h4>
		<h2>Ukus meda i vina</h2>
		<h1>Po povoljnoj ceni</h1>
		<p>Za kupovinu iznad 3000 din. besplatna dostava!</p>
		<a href="shop.php"><button>NARUCI SAD</button></a>
	</section>

	<section id="feature" class="section-p1">
		<div class="fe-box">
			<img src="img/banner/crveni.jpg" alt="" width="150px" height="150px">
			<h6>Ruby Mead</h6>
		</div>
		<div class="fe-box">
			<img src="img/banner/zlatni.jpg" alt="" width="150px" height="150px">
			<h6>Golden Mead</h6>
		</div>
		<div class="fe-box">
			<img src="img/banner/ljubicasti.jpg" alt="" width="150px" height="150px">
			<h6>Lavander Mead</h6>
		</div>
		<div class="fe-box">
			<img src="img/banner/zeleni.jpg" alt="" width="150px" height="150px">
			<h6>Ginger Mead</h6>
		</div>
		<div class="fe-box">
			<img src="img/banner/plavi.jpg" alt="" width="150px" height="150px">
			<h6>Mint Mead</h6>
		</div>
		<div class="fe-box">
			<img src="img/banner/braon.jpg" alt="" width="150px" height="150px">
			<h6>Copper Mead</h6>
		</div>

	</section>

	<section id="produkt1" class="section-p1">
		<h2>Dostupni Proizvodi</h2>
		<p>Razne Medovine Razlicitih Jacina</p>
		<div class="pro-container">
			<div class="pro">
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
				<a href="sprodukt.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
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
				<a href="sproduktc.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
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
				<a href="sproduktp.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
				<img src="img/banner/zeleni.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Ginger Medovina 15% Alc</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>1500din</h4>
				</div>
				<a href="sproduktze.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
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
				<a href="sproduktlj.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
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
				<a href="sproduktbr.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
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
				<a href="sproduktkut.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
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
				<a href="sproduktkutv.php"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
		</div>
	</section>

	<section id="Banner" class="section-m1">
		<h4>KRATKOTRAJNA PONUDA</h4>
		<h2>Besplatna Dostava Na Porudzbine Od <span>3000din</span></h2>
		<a href="shop.php"><button class="normal">Pretrazite</button></a>
	</section>

	<section id="sm-banner" class="section-p1">
		<div class="banner-box">
			<h4>Posetite Nas</h4>
			<h2>Sremski Karlovci</h2>
			<span>Proizvodi Se Iskljucivo U Sremskim Karlovcima</span>
			<a href="onama.php"><button class="white">Saznajte Vise</button></a>
		</div>
		<div class="banner-box banner-box2">
			<h4>Za Vise Pitanja</h4>
			<h2>Pogledajte Nasu Kontakt Stranicu</h2>
			<a href="contact.php"><button class="white">Kontakt</button></a>
		</div>
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
	
?php<
	include("footer.php");
?>

