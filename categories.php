<?php
    include('funkcije/userfunctions.php');
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
        <li><a class="active" href="categories.php">Shop</a></li>
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

  <div class="py-3 bg-warning">
    <div class="container">
      <h5 class="text-white ">Home / Kategorije</h5>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Nase Kategorije</h1>
          <hr>
          <div class="row">

          
          <?php 
            $categories = getAllActive("categories");

            if(mysqli_num_rows($categories) > 0)
            {
              foreach($categories as $item)
              {
                ?>
                  <div class="col-md-3 mb-2">
                    <a href="products.php?category=<?= $item['slug']; ?>">
                      <div class="card shadow"></div>
                        <div class="card-body">
                          <img src="uploads/<?= $item['image']; ?>" alt="category image" class="w-100">
                          <h4 class="text-center"><?= $item['name']; ?></h4>
                        </div>
                      </div>
                    </a>
                <?php
              }
            }
            else
            {
              echo"no data";
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<?php
    include("footer.php");
?>