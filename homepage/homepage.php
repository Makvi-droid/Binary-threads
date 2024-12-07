<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../index.php'); // Redirect to login page
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homepage.css">
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
                        <a class="nav-link" href="homepage.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gallery/gallery.php">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about/about.php">ABOUT US</a>
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

                    <!--log-out button-->
                    <button class="btn" name="logOut-btn" type="button" id="logOut-btn"><a href="logout.php"
                    style="text-decoration: none; color: black;">Log out</a></button>
                    <!--log-out button-->

                    <!--profile-->
                    <button type="button" class="btn btn-warning" id="profile-btn">
                    <i class="fa-regular fa-user"></i>
                    <span id="name"><?php echo htmlspecialchars($_SESSION['username']); ?></span></button>
                    
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

<!--welcome message-->
<div class="toast-container position-relative bottom-0 end-0 p-3">
  <div class="toast align-items-center text-bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true" id="welcomeToast">
    <div class="d-flex">
      <div class="toast-body">
        Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?>!</strong>
      </div>
      <button type="button" class="btn-close btn-close-black me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>
<!--welcome message-->


<!--carousel start-->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-group">
                    <div class="card">
                        <img src="img/tshirt1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Shirts</h5>
                            <p class="card-text">Stylish yet simple crochet shirts made in various fibers and styles, from breathable cotton to acrylic, from the classic granny square shirt to double crochets. </p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/dress1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Dresses</h5>
                            <p class="card-text">Eye-catching handmade crochet dresses to steal the spotlight of every party and room. 
                                </p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/sweater1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crochet Sweaters</h5>
                            <p class="card-text">From the classic granny's square sweaters to clean and minimalistic yet practical designs,
                                we have you covered to combat the coldest weathers.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-group">
                    <div class="card">
                        <img src="img/scarf1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Scarves</h5>
                            <p class="card-text">Thick, wide, and warm handmade crocheted scarves made with love and care to keep you company
                                in cold weathers.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/beanie1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Beanies</h5>
                            <p class="card-text">Cute and comfortable, these handmade crocheted beanies will make you as cute as a bean
                                ,while also keeping you warm.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/bag1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Bags</h5>
                            <p class="card-text">Very cute, demure, and mindful. These bags are very practical yet stylish. Made with strong cotton yarns
                                to handle tough love, while also being your cute shopping companion.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-group">
                    <div class="card">
                        <img src="img/shorts1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Shorts</h5>
                            <p class="card-text">Crochet shorts made in breathable acrylic and bamboo yarn to keep you cool, smooth, and 
                                stylish for the warm weathers.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/decor1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Decor</h5>
                            <p class="card-text">Spice up your home with beautiful, rustic, handmade decors that will surely wow visitors
                                and be a cute conversation piece.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/plushie1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocheted Plushies</h5>
                            <p class="card-text">Need company during lonely nights or scary dark days? Our selection of cute and huggable
                                crochet plushie will sure have you giggling with glee.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon next" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon next" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!--carousel end-->


<!--pagination start-->
    <div class="container my-5" id="amenities">
        <h2 class="text-center" id="product-h2">Our Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/beanie1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">Ribbed Beanie</p>
                        <p><del>PHP 289.00</del></p>
                        <h5 class="card-title">PHP 189.00</h5>
                        <p class="card-text">4.5 <i class="fa-solid fa-star"></i>(1,276)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/dress1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">Beach Netted Dress</p>
                        <p><del>PHP 1599.00</del></p>
                        <h5 class="card-title">PHP 1099.00</h5>
                        <p class="card-text">4.3 <i class="fa-solid fa-star"></i>(921)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/scarf1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">Classic Scarf</p>
                        <p><del>PHP 479.00</del></p>
                        <h5 class="card-title">PHP 334.00</h5>
                        <p class="card-text">4.6 <i class="fa-solid fa-star"></i>(3,276)</p>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<!--pagination end-->


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

    <script src="homepage.js"></script>
</body>

</html>