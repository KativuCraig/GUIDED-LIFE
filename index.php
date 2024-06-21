<!doctype html>
<html lang="en">
  <head>
    <title>Guarded lIFE+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Register</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Guarded lIFE<span>+</span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link " href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.png');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
             
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/slider-1.png');">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->

    

    <!-- END section -->

    
    <!-- END section -->

    
    <!-- END section -->

    <!-- END section -->

    
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-4 mb-5">
            <h3>Services</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="#">Online Claims</a></li>
              <li><a href="#">Policy Tracking</a></li>
              <li><a href="#">Policy Application</a></li>
              <li><a href="#">Procedures &amp; Treatments</a></li>
              <li><a href="#">Online Payments</a></li>
               
            </ul>
          </div>
          
          <div class="col-md-4 mb-5">
            <h3>About</h3>
            <P align="justify">
              The Owner and director of this system is Tinah
            </P>
          </div>
          <div class="col-md-4 mb-5">
            <h3>Location &amp; Contact</h3>
            <p class="mb-5">99 Mbuya Nehanda, Harare, Zimbabwe</p>

            <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@tinah.co.zw</a></p>
            
            <h4 class="text-uppercase mb-3 h6 text-white">Phone</h5>
            <p>+263 78 599 4258</p>

          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p>&copy; 2024 Tinah. Designed &amp; Developed by <a href="https://colorlib.com/">Tinah</a></p>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->


    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method ="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control"  name="name" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control"  name="email" id="appointment_email">
              </div>
                <div class="form-group">
                <label  class="text-black">Phone Number</label>
                <input type="text" class="form-control" name="phone"  >
              </div>
                <div class="form-group">
                <label  class="text-black">Home Address</label>
                <input type="text" class="form-control" name="address" >
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date"  class="text-black">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" >
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">National ID Number</label>
                    <input type="text" class="form-control" name="ID" >
                  </div>
                </div>
                  
              </div>
              
                    <div class="form-group">
                <label  class="text-black">Password</label>
                <input type="password" name = "pass" class="form-control" id="appointment_email">
              </div>
                  <div class="form-group">
                <label for="appointment_email"  class="text-black">Repeat Password</label>
                <input type="password" name="pass1" class="form-control" >
              </div>
              <div class="form-group">
                <input type="submit" name ="btn-signup" value="Register" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>