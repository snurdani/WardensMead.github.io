<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WM-KutijaSaMedovinom</title>
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

	<section id="prodetails" class="section-p1">
			<div class="single-pro-image">
					<img src="img/banner/kutijaSaMedovinom.png" width="100%" id="MainImg" alt="">

					<div class="small-img-group">
							<div class="small-img-col">
									<img src="img/banner/kutijaSaMedovinom.png" width="100%" class="small-img" alt="">
							</div>
					</div>
			</div>

			<div class="single-pro-details">
					<h6>Shop/WardensMeadKutijaSaMedovinom</h6>
					<h4>WM Kutija sa Medovinom</h4>
					<h2>4500din</h2>
					<input type="number" value="1">
					<button class="normal">Dodaj u Korpu</button>
					<h4>Produkt Detalji</h4>
					<span>Elegantna kvalitetna drvena kutija sa logo Wardens Mead na njoj uz dodatak 2 boce medovine 
					</span>
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
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
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
				<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
			</div>
			<div class="pro">
				<img src="img/banner/plavi.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Sapphire Medovina Sa Ukusom Mente 15% Alc</h5>
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
			<div class="pro">
				<img src="img/banner/zeleni.jpg" alt="">
				<div class="des">
					<span>WM</span>
					<h5>Emerald Medovina 15% Alc</h5>
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

    <script>
        var MainImg = document.getElementById("MainImg")
        var smallimg = smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>


	<script src="script.js"></script>	
</body>

<?php
    include("footer.php");
?>