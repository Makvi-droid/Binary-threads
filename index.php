<?php

session_start(); 
include 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-signUp'])) {
    
    $username = mysqli_real_escape_string($conn, $_POST['signup-username']);
    $email = mysqli_real_escape_string($conn, $_POST['signup-email']);
    $password = mysqli_real_escape_string($conn, $_POST['signup-password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['signup-confirm-password']);

    
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        
        $emailCheckQuery = "SELECT * FROM sign_up WHERE email = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

        if (mysqli_num_rows($emailCheckResult) > 0) {
           
            echo "The email is already registered. Please use a different email.";
        } else {
            
            $query = "INSERT INTO sign_up (username, email, password) VALUES ('$username', '$email', '$password')";

            
            if (mysqli_query($conn, $query)) {

                echo "Sign-up successful!";
                
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-logIn'])) {
  // Sanitize and retrieve input
  $username = mysqli_real_escape_string($conn, $_POST['login-username']);
  $password = mysqli_real_escape_string($conn, $_POST['login-password']);

  // Query to validate login
  $query = "SELECT * FROM sign_up WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) === 1) {
      // Valid login
      $_SESSION['username'] = $username; 
      header('Location: homepage/homepage.php');  
      exit();
  } else {
      // Invalid login
      $login_error = "Invalid username or password.";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nerko+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Reddit+Sans+Condensed:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=SUSE:wght@100..800&family=Space+Grotesk:wght@300..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   <!-- Log In -->
<div class="container align-self-center">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="index.php" method="post" class="sign-in-form needs-validation" id="login-form"  novalidate>
          <h2 class="title">Log in</h2>

          <?php if (isset($login_error)): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo htmlspecialchars($login_error); ?>
            </div>
          <?php endif; ?>



          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" name="login-username" placeholder="Username" id="login-username" required />
            <div class="invalid-tooltip">Please enter your username.</div>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" class="form-control" name="login-password" placeholder="Password" id="login-password" required />
            <div class="invalid-tooltip">Please enter your password.</div>
          </div>
          <button class="btn btn-warning" name="btn-logIn" type="submit">Log In</button>
        </form>
  
        <!-- Sign Up -->
        <form action = "index.php" name="signUpForm" method="post" class="sign-up-form needs-validation" id="signup-form" novalidate>
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" name="signup-username" placeholder="Username" id="signup-username" minlength="4" required />
            <div class="invalid-tooltip">Username is too short (min. 4 characters).</div>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" class="form-control" name="signup-email" placeholder="Email" id="signup-email" required />
            <div class="invalid-tooltip">Please enter a valid email.</div>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="signup-password" class="form-control" placeholder="Password" id="signup-password" minlength="5" required />
            <div class="invalid-tooltip">Password is too short (min. 5 characters).</div>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="signup-confirm-password" class="form-control" placeholder="Confirm Password" id="signup-confirm-password" required />
            <div class="invalid-tooltip">Passwords do not match.</div>
            <div class="valid-tooltip">Passwords match.</div>
          </div>
          <button class="btn btn-warning" name="btn-signUp" type="submit">Sign Up</button>
        </form>
      </div>
    </div>

  
    <!-- Panels -->
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p class="m-lg-2">
            Sign up today and unlock exclusive access to our latest handmade creations, special offers, and crochet inspiration. Let’s start your creative journey!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/su.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>
            Welcome back to your crochet haven! Log in to continue exploring our latest collections, track your orders, and get inspired by new designs. We are excited to have you back!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/lg.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  

  
    <script src="https://kit.fontawesome.com/77d4dcdf26.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>