<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, internal-scale=1.0">
	<title>WM-About</title>
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
        <li><a class="active" href="onama.php">About</a></li>
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

    <section id="page-header" class="onama-header">

        <h2>Upoznajte nas</h2>
        <p>im wein liegt die wahrheit</p>

    </section>

    <section id="onama-head" class="section-p1">
        <img src="img/banner/wmkartica.jpg" alt="">
        <div>
        <h2>Ko Smo Mi?</h2>
        <p>Pre 3 godine je krenula ideja pravljenja medovina iz nemogućnost izlaženja iz kuće zbog pandemije. 
            Od toga je nastalo malo preduzeće. Bilo je skoro nezamisivo da će od 5 litara da krene sve. Sada imamo 6+ vrsta medovine, a tada je bilo naporno 
            napraviti jednu vrstu. Hvala svima koji su podržavali ovo malo preduzeće u bilo kom obliku Nalazimo se u Sremskim Karlovcima</p>

            <br>

            <marquee bgcolor="#d8b164" loop="-1" scrollamount="5" width="100">Zahvaljujemo se svima koji narucuju medovinu od nas</marquee>
        </div>
    </section>

    <section id="trailer" class="section-p1">
        <h1>Uzivajte sa Nama</h1>
        <div class="video">
        <video autoplay muted loop src="img/banner/mwvideo.mp4"></video>
        </div>
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
