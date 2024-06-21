<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "guidedlife";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}



  if ( isset($_POST['btn-signup']) ) {
    
    // clean user inputs to prevent sql injections
    $name = trim($_POST['name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);
        
        $nmb = trim($_POST['phone']);
    $nmb = strip_tags($nmb);
    $nmb = htmlspecialchars($nmb);
    
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
        
        $place = trim($_POST['address']);
    $place = strip_tags($place);
    $place = htmlspecialchars($place);
        
        $id = trim($_POST['ID']);
    $id = strip_tags($id);
    $id = htmlspecialchars($id);
        
        $date = trim($_POST['dob']);
    $date = strip_tags($date);
    $date = htmlspecialchars($date);
    
    $pass = trim($_POST['pass']);
$pass = strip_tags($pass);
$pass = htmlspecialchars($pass);

$pass1 = trim($_POST['pass1']);
$pass1 = strip_tags($pass1);
$pass1 = htmlspecialchars($pass1);

$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
      $result = mysqli_query($con,$query);
      $count = mysqli_num_rows($result);
    $sql = mysqli_query($con,"SELECT idnum FROM users WHERE idnum='$id'");
      $read = mysqli_num_rows($sql);
    
    // basic name validation
    if (empty($name)) {
      echo "<script>alert('enter name')</script>";
    } 
    else if (strlen($name) < 3) {
      echo "<script>alert('name must have at least 3 characters')</script>";
    }
     else if (!preg_match("/^[A-Za-z]*\s{1}[A-Za-z]*$/",$name)) {
      echo "<script>alert('First and last name please')</script>";
           
    }
        
        else if (empty($nmb)) {
      echo "<script>alert('enter number')</script>";
    } 
        
        else if(!preg_match("/^[+][0-9]{12}$/",$nmb)){
      echo "<script>alert('phone number should have Zimbabwe Country code')</script>";
    }
    else if(!preg_match("/^[0-9]{2}[-][0-9]{6,7}-[A-Za-z][-][0-9]{2}$/",$id)){
      echo "<script>alert('your id number is invalid')</script>";
    }
        
         else if (empty($place)) {
      echo "<script>alert('enter address')</script>";
    }
    //basic email validation
    else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
      echo "<script>alert(' valid email address please ')</script>";
    }
    // check email exist or not
    else if($count!=0){
        echo "<script>alert('email address already in use')</script>";
    }
    else if($read!=0){
        echo "<script>alert('id number registered another account')</script>";
    }
    // password validation
    else if (empty($pass)){
      echo "<script>alert('enter password')</script>";
    } else if(strlen($pass) < 6) {
      echo "<script>alert('password too short')</script>";
    }
        else if (($pass != $pass1)){
      echo "<script>alert('passwords mismatch')</script>";
    }

    
    // password encrypt using SHA256();
  
    // if there's no error, continue to signup
    else {
      
      $query = "INSERT INTO users(access_level, userName, userEmail, phone, idnum, dob, address, userPass) VALUES('client', '$name', '$email', '$nmb', '$id', '$date', '$place', '$hashed_password')";
        
      if ($res) {
        echo "<script>alert('sign up successful'); location='index.php'</script>";
               
      } else {
        echo "<script>alert('something wrong happened ')</script>"; 
      } 
        
    }
    
    
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Guard Life+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            
              </ul>
            </div>
            
          </div>
        </div>
      </div>
     
    </header>
    <!-- END header -->
    

    <!-- END slider -->


    <section class="section">
      <div class="container">
        <div class="row">
           <div class="col-md-6 mb-5 element-animate">
              <h3>Register Now</h3>
              <p>And Let Us Help You</p><br>
              <form method ="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" required  name="name" id="appointment_name" value="<?php echo $_POST["name"];?>">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="email" class="form-control" required  name="email" value="<?php echo $_POST["email"];?>" id="appointment_email">
              </div>
                <div class="form-group">
                <label  class="text-black">Phone Number</label>
                <input type="text" class="form-control" value="<?php echo $_POST["phone"];?>" required name="phone"  >
              </div>
                <div class="form-group">
                <label  class="text-black">Home Address</label>
                <input type="text" class="form-control" value="<?php echo $_POST["address"];?>" required name="address" >
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date"  class="text-black">Date of Birth</label>
                    <input type="date" class="form-control" required name="dob" value="<?php echo $_POST["dob"];?>" >
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">National ID Number</label>
                    <input type="text" class="form-control" required name="ID" value="<?php echo $_POST["ID"];?>" >
                  </div>
                </div>
                  
              </div>
              
                    <div class="form-group">
                <label  class="text-black">Password <font color = "red">*Must be 6 characters long*</font></label>
                <input type="password" name = "pass" required class="form-control" id="appointment_email" value="<?php echo $_POST["pass"];?>">
              </div>
                  <div class="form-group">
                <label for="appointment_email"  class="text-black">Repeat Password</label>
                <input type="password" name="pass1" required class="form-control" value="<?php echo $_POST["pass1"];?>">
              </div>
              <div class="form-group">
                <input type="submit" name ="btn-signup" value="Register" class="btn btn-primary">
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