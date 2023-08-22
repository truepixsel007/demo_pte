<!DOCTYPE html>
<html lang="zxx" class="theme-light">

 <?php
 include 'head.php'
?>

  <body>
    <!-- Start Preloader Area -->
    <!-- <div class="preloader">
      <div class="spinner"></div>
    </div> -->
    <!-- End Preloader Area -->

  <!-- Start Page Title -->
  <div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h2>Login</h2>
            </div>
        </div>
    </div>
    
    <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
    <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
    <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
    <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
</div>
<!-- End Page Title -->

    <!-- Start Navbar Area -->
    <?php 
     include 'header.php'
	?>
    <!-- End Navbar Area -->
  


     <!-- Start Login Area -->
     <div class="ptb-80">
        <div class="container">
            <div class="auth-form">
                <div class="auth-head">
                    <a href="index.html">
                        <img src="assets/img/logo.png">
                    </a>
                   
                </div>
                <form>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" password="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <a href="forgot-password.html">Forgot Password</a>
                    </div>
                    <button type="submit" name="login" id="login" class="btn btn-color">Login</button>
                </form>
                <div class="foot">
                <p>Don't have an account yet? <a href="register.php">Sign Up</a></p>
                    <ul>
                        <li><a href="#" class="linkedin" target="_blank"><i data-feather="mail"></i></a></li>
                        <li><a href="#" class="facebook" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" class="twitter" target="_blank"><i data-feather="twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

   <!-- Start Footer Area -->
   <?php
      include 'footer.php';
	?>
	<!-- End Footer Area -->

    <div class="go-top"><i data-feather="arrow-up"></i></div>

    <!-- Dark/Light Toggle -->
    <!-- <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div> -->

    <!-- All JS Link -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- boostrap script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>

</html>
