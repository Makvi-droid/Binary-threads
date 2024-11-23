<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nerko+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Raleway:ital,wght@0,100..900;1,100..900&family=Reddit+Sans+Condensed:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=SUSE:wght@100..800&family=Space+Grotesk:wght@300..700&family=Tiny5&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

     <!--navbar start-->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <img src="img/logo3.png" class="img-fluid" alt="..." id="logo">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="" aria-label="Search" id="search-bar">
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
            <a class="nav-link" href="about.php">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/contact.php">CONTACT</a>
          </li>
        </ul>
           

            <!--cart button-->
            <button class="btn btn-primary" type="button" id="cartBtn" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
            class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></button>
            <!--cart button-->
            
      </div>
    </div>

  </nav>



  <!--add to cart btn start with modal-->
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


<!--About us-->

<!--team intro, other and testimonials-->
<div class="container my-5 py-5" id="abt2">
  
    <!-- About Us Section -->
    <div class="row align-items-center mb-5 pb-5" style="border-bottom: 2px solid #ddd;">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="img/img2.jpg" class="img-fluid rounded shadow" alt="Handcrafted crochet product">
        </div>
        <div class="col-md-6">
            <h2 class="display-5 mb-4" id="abt-txt">About Us</h2>
            <p class="mb-3">
                Welcome to <strong>Binary Threads</strong>, your go-to destination for handcrafted crochet products! We’re passionate about creating beautiful, unique, and high-quality crochet items that bring warmth, style, and charm to your everyday life.
            </p>
            <p class="mb-3">
                Our team is dedicated to preserving the art of crochet while adding a modern twist to traditional designs. Every stitch tells a story, and we’re thrilled to share our creations with you.
            </p>
            <p>
                Thank you for supporting our small business. We can’t wait to be part of your story, one crochet piece at a time.
            </p>
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="my-5 py-5 bg-light rounded-3 shadow-sm">
        <h3 class="text-center display-6 mb-4">Our Mission</h3>
        <p class="text-center mx-auto" style="max-width: 700px;">
            At <strong>Binary Threads</strong>, we strive to bring joy through crochet by providing sustainable, handmade products that create a sense of comfort and warmth.
        </p>
    </div>

    <!-- Meet the Team Section -->
    <div class="container my-5 py-5">
        <h3 class="text-center display-6 mb-4">Meet the Team</h3>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="img/g1.png" class="img-fluid rounded-circle shadow mb-3" alt="Team Member 1" style="width: 150px; height: 150px;">
                <h5>James Francis P. Rabena</h5>

            </div>
            <div class="col-md-4 mb-4">
                <img src="img/g2.png" class="img-fluid rounded-circle shadow mb-3" alt="Team Member 2" style="width: 150px; height: 150px;">
                <h5>Isaiah Joshua A. Garcia</h5>
                
            </div>
            <div class="col-md-4 mb-4">
                <img src="img/g3.png" class="img-fluid rounded-circle shadow mb-3" alt="Team Member 3" style="width: 150px; height: 150px;">
                <h5>Vaniel Luis S. Jorge</h5>
                
            </div>
            <div class="col-md-4 mb-4">
                <img src="img/g4.png" class="img-fluid rounded-circle shadow mb-3" alt="Team Member 3" style="width: 150px; height: 150px;">
                <h5>Monique G. Roa</h5>
                
            </div>
            <div class="col-md-4 mb-4">
                <img src="img/g5.jpg" class="img-fluid rounded-circle shadow mb-3" alt="Team Member 3" style="width: 150px; height: 150px;">
                <h5>Pascual Bernard T. Beanuro</h5>
              
            </div>
        </div>
    </div>

    <!-- Materials and Sustainability Section -->
    <div class="my-5 py-5 bg-light rounded-3 shadow-sm">
        <h3 class="text-center display-6 mb-4">Our Materials and Sustainability</h3>
        <p class="text-center mx-auto" style="max-width: 700px;">
            We use eco-friendly, locally sourced yarns and materials to ensure each product has a minimal environmental impact. Our commitment to sustainability reflects our love for the planet and our goal to provide handmade, guilt-free crochet items.
        </p>
    </div>

    <!-- Customer Testimonials Section -->
    <div class="container my-5 py-5">
        <h3 class="text-center display-6 mb-4">What Our Customers Say</h3>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="img/img3.jpg" class="img-fluid rounded-circle shadow mb-3" alt="Customer Sarah T." style="width: 230px; height: 230px;">
                <blockquote class="blockquote">
                    <p>"Absolutely in love with my new crochet blanket! It's so warm and beautifully made."</p>
                    <footer class="blockquote-footer">Sarah T.</footer>
                </blockquote>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/img4.jpg" class="img-fluid rounded-circle shadow mb-3" alt="Customer James L." style="width: 230px; height: 230px;">
                <blockquote class="blockquote">
                    <p>"The quality is amazing, and I love supporting a small business with such heart."</p>
                    <footer class="blockquote-footer">James L.</footer>
                </blockquote>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/img5.jpg" class="img-fluid rounded-circle shadow mb-3" alt="Customer Emily R." style="width: 230px; height: 230px;">
                <blockquote class="blockquote">
                    <p>"These crochet pieces bring so much warmth to my home decor. Highly recommend!"</p>
                    <footer class="blockquote-footer">Emily R.</footer>
                </blockquote>
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="about.js"></script>
    <script src="https://kit.fontawesome.com/77d4dcdf26.js" crossorigin="anonymous"></script>


</body>

</html>