<footer class="section-p1">
  <div class="col">
      <img class="logo" src="img/banner/wmlogo.png" style="max-width: 50px;
      height: 50px;" alt="">
      <h4>Contact</h4>
      <p><strong>Adresa:</strong> Dimitrija Sabova 8, Sremski Karlovci, Serbia, 21205</p>
      <p><strong>Mobilni Tel:</strong>062 422293</p>
      <div class="pratite">
          <h4>Pratite Nas</h4>
          <div class="icon">
              <a href="https://www.facebook.com/wardensmead/"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/wardensmead/"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
  </div>

  <div class="col">
      <h4>O Nama</h4>
      <a href="onama.php">Vise o Nama</a>
      <a href="contact.php">Informacije o Dostavi</a>
      <a href="contact.php">Kontakt</a>
  </div>

  <div class="col">
      <h4>Moj Nalog</h4>

      <?php
        if(isset($_SESSION['auth']))
        {
            ?>
                <?= $_SESSION['auth_user']['user'] ?><br><br>
                <a href="korpa.php">Pogledaj Korpu</a>
                <a href="contact.php">Pomoc</a>
                <a href="logout.php">Odjavi se</a>

                <?php
            }
            elseif(!isset($_SESSION['auth']))
            {
                ?>
                <a href="login.php">Uloguj se</a>
                <a href="Prijava.php">Prijavi se</a>
                <?php
            }
      ?>
  </div>
  
  <div class="col">
      <p>Podrzana Sredstva Placanja</p>
      <img src="img/banner/Credit.png" style="width: 340px; height: 66px;" alt="">
  </div>

  <div class="copyright">
      <p>© 2023 Warden's Mead - Medovina Sremski Karlovci</p>
  </div>
</footer>