<?php
    session_start();
    include("database.php"); 
    
    if(isset($_SESSION['auth']))
    {
        $_SESSION['message'] = "Vec ste ulogovani";
        header('Pocetna.php');
        exit();
    }
?>

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
        <li><a href="Pocetna.php">Home</a></li>
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
    <section class="section-p1" id="form-details">
        <form action="funkcije/authcode.php" method="post">

            <label>username:</label><br>
            <input type="text" name="user" placeholder="Ime"><br>

            <label>password:</label><br>
            <input type="password" name="password" placeholder="Lozinka"><br>

            <label>confirm password:</label><br>
            <input type="password" name="cpassword" placeholder="Potvrdi lozinku"><br>

            <label>e-mail:</label><br>
            <input type="email" name="email" placeholder="Vasmail@gmail.com"><br>

            <label>Phone:</label><br>
            <input type="text" name="phone" placeholder="Broj-telefona"><br>

            <input class="normal" type="submit" name="register" value="register">

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
</html>
<?php
    include("footer.php");
?>

<?php
    mysqli_close($con);
?>