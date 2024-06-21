<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "guidedlife";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the login form is submitted
if(isset($_POST['btn-login'])) {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Query to check if the user exists in the database
    $query = "SELECT * FROM users WHERE userEmail = '$email'";
    // Execute the query
    $result = $connection->query($query);

    if($result) {
        // Check if a user with the provided email exists
        if($result->num_rows == 1) {
            // Fetch user data
            $row = $result->fetch_assoc();

            $hashed_password = $row['userPass'];
            // Verify if the password matches
            if(password_verify($password, $hashed_password)) {
                // Password is correct, log in the user
                // Start a session and store user information
                session_start();
                $_SESSION['userId'] = $row['userId'];
                // Redirect to a logged-in page
                header("Location: ../DASHBOARD/Dashboard/admin.php");
                exit();
            } else {
                // Password is incorrect
                $errTyp = "danger";
                $errMSG = "Incorrect password. Please try again.";
            }
        } else {
            // User with the provided email does not exist
            $errTyp = "danger";
            $errMSG = "No user found with this email address.";
        }
    } else {
        // Error executing the query
        $errTyp = "danger";
        $errMSG = "Something went wrong. Please try again later.";
    }
}
?>
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
                <a href="register.php" class="cta-btn"  >Register</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Guarded lIFE<span>+</span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              
               <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
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
    

    <!-- END slider -->


    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h3>Welcome to Guarded Life  +</h3><br>
                <p>You may Login</p><br>
                
                 <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span><font color ="red"><?php echo $errMSG; ?></font>
                </div>
            	</div>
                <?php
			}
			?>
                
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="email" >Email</label>
                  <input type="text" name="email" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname" >Password</label>
                  <input type="password" name="pass" class="form-control form-control-lg" >
                </div>
              </div>
              <div class="form-group">
                <input type="submit" value="Login" name="btn-login" class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
          

          </div>
        </div>
      </div>
    </section>

    

   
    <!-- END cta-link -->

    
    <!-- END footer -->


    <!-- Modal -->
    

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