<footer class="footer pt-5">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-12">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="#" class="nav-link pe-0 text-muted" target="_blank">about us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link pe-0 text-muted" target="_blank">servis</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link pe-0 text-muted" target="_blank">contact</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link pe-0 text-muted" target="_blank">about</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</footer>
  </main>

  <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">
          
        </div>
    </div>
  </div>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script src="assets/js/custom.js"></script>

   <!-- ALERTIFY js -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  <script>

    <?php if(isset($_SESSION['message'])) { ?>
      alertify.set('notifier','position', 'top-center');
      alertify.success('<?= $_SESSION['message'];?>');
      
      <?php 
      unset($_SESSION['message']);

    } 
    
    ?>
  </script>
  
  </body>
</html>