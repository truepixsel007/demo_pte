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

    <!-- Start Navbar Area -->
    <!-- Start Navbar Area -->
    <?php 
     include 'header.php'
	?>
    <!-- End Navbar Area -->
    <!-- End Navbar Area -->

   
    

   

   

    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Register</h2>
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
    
    <!-- Start Register Area -->
    <div class="ptb-80">
        <div class="container">
            <div class="auth-form">
                <div class="auth-head">
                    <a href="index.html">
                        <img src="assets/img/logo.png">
                    </a>
                    <p>Create a new account</p>
                </div>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full name</label>
                        <input type="name" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile No.</label>
                        <input type="tel" name="mobile" id="mobile" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">What is your nationality ?</label>
                        <select class="form-select" aria-label="Default select example" id="country" name="country">
                            <option selected>Open this select menu</option>
                            <option value="1"> Vietnamese </option>
                            <option value="2"> Chinese </option>
                            <option value="4"> Indian </option>
                            <option value="5"> Nepalese </option>
                            <option value="6">  Bangladeshis </option>
                            <option value="7">   Philippines  </option>
                            <option value="8">   others  </option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have institute/Agent</label>
                    <div class="text-start">
                        <input type="radio" id="agent"  name="agent" >
                        <label for="yes">Yes</label>
                
                        <input type="radio" id="agent" name="agent" checked>
                        <label for="no">No</label>
                    </div>							
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Target Score</label>
                        <select class="form-select" aria-label="Default select example" name="score" id="score">
                            <option selected>Open this select menu</option>
                            <option value="1">50</option>
                            <option value="2">65</option>
                            <option value="4">79</option>
                          </select>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-color">Sign Up</button>
                </form>
                <div class="foot">
                    <p>Already have an account yet? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register Area -->

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
