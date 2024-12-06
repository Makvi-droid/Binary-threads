<?php
include ("../database.php");
session_start();

$username = $name = $email = $message = "";
$usernameErr = $nameErr = $emailErr = $messageErr = "";

// Checker
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate username
    if (empty($_POST["contact_username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["contact_username"]);
    }

    // Validate name
    if (empty($_POST["contact_name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["contact_name"]);
    }

    // Validate email
    if (empty($_POST["contact_email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["contact_email"]);
        // Check if email format is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    // database instert, no errors
    if (empty($usernameErr) && empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        
        $username = mysqli_real_escape_string($conn, $username);
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $message = mysqli_real_escape_string($conn, $message);

        
        $query = "INSERT INTO contact_us (contact_username, contact_name, contact_email, contact_message) 
                  VALUES ('$username', '$name', '$email', '$message')";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Form submitted successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nerko+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Reddit+Sans+Condensed:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=SUSE:wght@100..800&family=Space+Grotesk:wght@300..700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<!--navbar start-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="img/logo3.svg" class="img-fluid" alt="..." id="logo">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search"
                            id="search-bar">
                        <button class="btn btn-outline-dark" id="search-btn" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../homepage/homepage.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gallery/gallery.php">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about/about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                </ul>
                
                <!--cart button-->
                <button class="btn btn-primary" type="button" id="cartBtn" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></button>
                <!--cart button-->

                <!--log-out button-->
                <button class="btn" name="logOut-btn" type="button" id="logOut-btn"><a href="logout.php"
                style="text-decoration: none; color: black;">Log out</a></button>
                <!--log-out button-->

                 <!--profile-->
            
                <button type="button" class="btn btn-warning" id="profile-btn">
                <i class="fa-regular fa-user"></i><span id="profile">
                <?php echo htmlspecialchars($_SESSION['username']); ?></span></button>

            </div>
        </div>

       

    <!--add to cart btn start with modal-->
    </nav>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" id="cart">Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Your cart is empty</p>
        </div>
    <!--add to cart btn end with modal-->
    </div>
<!--navbar end-->



<div class="container my-5">
    <!-- Contact Form Card -->
    <div class="card shadow-lg">
        <div class="row g-0">
            <!-- Contact Info and Form Column -->
            <div class="col-md-8 p-4">
                <h2 class="text-center" id="contact-h2">CONTACT US</h2>
                <p class="text-center mb-4">
                    <strong>Hi there,</strong><br><br>
                    We'd love to hear from you whether to suggest new products, give reviews, or just simply say hi. Here is where you can contact us:<br><br>
                    <strong>Email:</strong> info@binarythreads.com<br>
                    <strong>Phone:</strong> +961 451 7757<br>
                    <strong>Address:</strong> 153 Flower St. Brgy St. Andrew, Atniac, Rizal<br>
                    <section class="mb-4 text-center">
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin"></i></a>
                    </section>
                    Looking forward to your messages,<br>
                    <strong>Binary Threads Team</strong>
                </p>

                <!-- Contact Form -->
                <form method="post" novalidate>
    <div class="mb-3">
        <label for="contact_username" class="form-label">Username</label>
        <input type="text" class="form-control <?php echo ($usernameErr) ? 'is-invalid' : ''; ?>" id="contact_username" name="contact_username" value="<?php echo $username; ?>" required>
        <div class="invalid-feedback"><?php echo $usernameErr; ?></div>
    </div>
    <div class="mb-3">
        <label for="contact_name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo ($nameErr) ? 'is-invalid' : ''; ?>" id="contact_name" name="contact_name" value="<?php echo $name; ?>" required>
        <div class="invalid-feedback"><?php echo $nameErr; ?></div>
    </div>
    <div class="mb-3">
        <label for="contact_email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo ($emailErr) ? 'is-invalid' : ''; ?>" id="contact_email" name="contact_email" value="<?php echo $email; ?>" required>
        <div class="invalid-feedback"><?php echo $emailErr; ?></div>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control <?php echo ($messageErr) ? 'is-invalid' : ''; ?>" id="message" name="message" rows="4" required><?php echo $message; ?></textarea>
        <div class="invalid-feedback"><?php echo $messageErr; ?></div>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
    
</form>
            </div>

            <!-- Image Column -->
            <div class="col-md-4 p-0">
                <img src="img/contact.jpg" class="img-fluid rounded-end" alt="Contact Us" style="object-fit: cover; height: 100%;">
            </div>
        </div>
    </div>
</div>








    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <section class="mb-4">
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin"></i></a>
            </section>

            <section class="">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Binary Threads Apparel</h5>
                        <p>
                            Handmade crochet apparel, accessories, and decor in one site, a click away.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#about" class="text-dark">Home</a></li>
                            <li><a href="#Gallery" class="text-dark">Gallery</a></li>
                            <li><a href="#about" class="text-dark">About Us</a></li>
                            <li><a href="#contact" class="text-dark">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contact</h5>
                        <p>Email: info@binarythreads.com</p>
                        <p>Phone: +961 451 7757</p>
                        <p>Address: 153 Flower St. Brgy St. Andrew, Atniac, Rizal</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="text-center p-3 bg-dark text-white">
            © 2024 Binary Threads. All rights reserved.
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/77d4dcdf26.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <!--<script src="contact.js"></script>-->
</body>

</html>



