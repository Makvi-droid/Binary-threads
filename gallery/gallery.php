<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="gallery.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Handjet:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nerko+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&family=Raleway:ital,wght@0,100..900;1,100..900&family=Reddit+Sans+Condensed:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=SUSE:wght@100..800&family=Space+Grotesk:wght@300..700&family=Tiny5&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
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
            <a class="nav-link" href="gallery.php">GALLERY</a>
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

      </div>
    </div>

</nav>



  
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" id="cart">Cart</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul id="cart-items" class="list-group">
        <li class="list-group-item">Your cart is empty</li>
    </ul>
    </div>
  </div>

  <!--navbar end-->


  <!--Holiday sale and trend section-->
<div class="sales-bg">
  <div class="container mt-5 sale">
    <h2 class="text-center mb-4">Holiday Special</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="carousel slide" id="holidayCarousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/img1.jpg" class="d-block w-100" alt="Holiday Image 1">
            </div>
            <div class="carousel-item">
              <img src="img/img2.jpg" class="d-block w-100" alt="Holiday Image 2">
            </div>
            <div class="carousel-item">
              <img src="img/img3.jpg" class="d-block w-100" alt="Holiday Image 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#holidayCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#holidayCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <p class="text-center mt-2">Don't miss our amazing holiday sale!</p>
  </div>

  <!-- Trending Section -->
  <div class="ht-sale">
    <div class="container mt-5 sale">
      <h2 class="text-center mb-4">Trending</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="carousel slide" id="trendingCarousel" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/bag1.png" class="d-block w-100" alt="Trending Image 1">
              </div>
              <div class="carousel-item">
                <img src="img/shorts1.png" class="d-block w-100" alt="Trending Image 2">
              </div>
              <div class="carousel-item">
                <img src="img/sweater1.png" class="d-block w-100" alt="Trending Image 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#trendingCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#trendingCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <p class="text-center mt-2">Check out what's trending right now!</p>
    </div>
  </div>
</div>

  
  

  <div id="product-container">
    
     <!--products-->
  <div class="container mt-5 products">
    <!-- Category 1: Crochet Hats -->
    <h2 class="mb-4">Crochet Hats</h2>
    <div class="row">
      <!-- Product Card (Initial) -->
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal1">
          <img src="img/hat1.jpg" class="card-img-top" alt="Crochet Hat 1">
          <div class="card-body">
            <h5 class="card-title">Black & White Beat</h5>
            <p class="card-text">PHP 179.99</p>
            <p class="card-text">4.1 <i class="fa-solid fa-star"></i>(1,233)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal2">
          <img src="img/hat2.jpg" class="card-img-top" alt="Crochet Hat 2">
          <div class="card-body">
            <h5 class="card-title">Blissful Hues</h5>
            <p class="card-text">PHP 159.99</p>
            <p class="card-text">4.4 <i class="fa-solid fa-star"></i>(1,981)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal3">
          <img src="img/hat3.jpg" class="card-img-top" alt="Crochet Hat 2">
          <div class="card-body">
            <h5 class="card-title">Reggae Rhythm</h5>
            <p class="card-text">PHP 135.99</p>
            <p class="card-text">4.6 <i class="fa-solid fa-star"></i>(2,193)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal4">
          <img src="img/hat4.jpg" class="card-img-top" alt="Crochet Hat 2">
          <div class="card-body">
            <h5 class="card-title">Grape Smoke</h5>
            <p class="card-text">PHP 120.99</p>
            <p class="card-text">4.1 <i class="fa-solid fa-star"></i>(1,203)</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Collapsible Section for More Products in Category 1 -->
    <div class="collapse" id="collapseHats">
      <div class="row">
        <!-- Additional Product Cards -->
        <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card" data-bs-toggle="modal" data-bs-target="#productModal1.1">
            <img src="img/hat5.jpg" class="card-img-top" alt="Crochet Hat 3">
            <div class="card-body">
              <h5 class="card-title">Pacific Blues</h5>
              <p class="card-text">Price: PHP 105.99</p>
              <p class="card-text">4.4 <i class="fa-solid fa-star"></i>(1,121)</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card" data-bs-toggle="modal" data-bs-target="#productModal1.2">
            <img src="img/hat6.jpg" class="card-img-top" alt="Crochet Hat 4">
            <div class="card-body">
              <h5 class="card-title">Peachy Keen</h5>
              <p class="card-text">PHP 99.99</p>
              <p class="card-text">4.9 <i class="fa-solid fa-star"></i>(3,219)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- "Show More" Dropdown Button for Category 1 -->
    <button class="btn btn-link show-more" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHats"
      aria-expanded="false" aria-controls="collapseHats">
      Show More Crochet Hats
    </button>

    <!-- Category 2: Crochet Scarves -->
    <h2 class="mt-5 mb-4">Crochet Scarves</h2>
    <div class="row">
      <!-- Product Card (Initial) -->
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal5">
          <img src="img/scarf1.jpg" class="card-img-top" alt="Crochet Scarf 1">
          <div class="card-body">
            <h5 class="card-title">Rustic Warmth</h5>
            <p class="card-text">PHP 199.99</p>
            <p class="card-text">3.9 <i class="fa-solid fa-star"></i>(893)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal6">
          <img src="img/scarf2.jpg" class="card-img-top" alt="Crochet Scarf 2">
          <div class="card-body">
            <h5 class="card-title">Blushed Mocha</h5>
            <p class="card-text">PHP 169.99</p>
            <p class="card-text">4.2 <i class="fa-solid fa-star"></i>(1,443)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal7">
          <img src="img/scarf3.jpg" class="card-img-top" alt="Crochet Scarf 1">
          <div class="card-body">
            <h5 class="card-title">Midnight Scarlet</h5>
            <p class="card-text">PHP 140.99</p>
            <p class="card-text">4.7 <i class="fa-solid fa-star"></i>(2,901)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#productModal8">
          <img src="img/scarf4.jpg" class="card-img-top" alt="Crochet Scarf 1">
          <div class="card-body">
            <h5 class="card-title">Ethereal Beige</h5>
            <p class="card-text">PHP 125.99</p>
            <p class="card-text">4.6 <i class="fa-solid fa-star"></i>(2,943)</p>
          </div>
        </div>
      </div>


    </div>

    <!-- Collapsible Section for More Products in Category 2 -->
    <div class="collapse" id="collapseScarves">
      <div class="row">
        <!-- Additional Product Cards -->
        <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card" data-bs-toggle="modal" data-bs-target="#productModal2.1">
            <img src="img/scarf5.jpg" class="card-img-top" alt="Crochet Scarf 3">
            <div class="card-body">
              <h5 class="card-title">Cloud Nine</h5>
              <p class="card-text">PHP 110.99</p>
              <p class="card-text">4.3 <i class="fa-solid fa-star"></i>(1,451)</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card" data-bs-toggle="modal" data-bs-target="#productModal2.2">
            <img src="img/scarf6.jpg" class="card-img-top" alt="Crochet Scarf 4">
            <div class="card-body">
              <h5 class="card-title">Dawn Fog</h5>
              <p class="card-text">PHP 99.99</p>
              <p class="card-text">4.1 <i class="fa-solid fa-star"></i>(1,003)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- "Show More" Dropdown Button for Category 2 -->
    <button class="btn btn-link show-more" type="button" data-bs-toggle="collapse" data-bs-target="#collapseScarves"
      aria-expanded="false" aria-controls="collapseScarves">
      Show More Crochet Scarves
    </button>


    <!--Crochet clothes-->
    <h2 class="mt-5 mb-4">Crochet Clothes</h2>
    <div class="row">
      <!-- Product Card (Initial) -->
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#crochet-clothes1">
          <img src="img/clothes1.jpg" class="card-img-top" alt="Crochet Clothes 1">
          <div class="card-body">
            <h5 class="card-title">Flora Flutter Top</h5>
            <p class="card-text">PHP 199.99</p>
            <p class="card-text">3.9 <i class="fa-solid fa-star"></i>(893)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#crochet-clothes2">
          <img src="img/clothes2.jpg" class="card-img-top" alt="Crochet Clothes 2">
          <div class="card-body">
            <h5 class="card-title">Whispering Willow Tee</h5>
            <p class="card-text">PHP 169.99</p>
            <p class="card-text">4.2 <i class="fa-solid fa-star"></i>(1,443)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#crochet-clothes3">
          <img src="img/clothes3.jpg" class="card-img-top" alt="Crochet Clothes 3">
          <div class="card-body">
            <h5 class="card-title">Seashell Breeze Halter</h5>
            <p class="card-text">PHP 149.99</p>
            <p class="card-text">4.7 <i class="fa-solid fa-star"></i>(2,901)</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
        <div class="card" data-bs-toggle="modal" data-bs-target="#crochet-clothes4">
          <img src="img/clothes4.jpg" class="card-img-top" alt="Crochet Clothes 4">
          <div class="card-body">
            <h5 class="card-title">Autumn Thread Blooms</h5>
            <p class="card-text">PHP 179.99</p>
            <p class="card-text">4.6 <i class="fa-solid fa-star"></i>(2,943)</p>
          </div>
        </div>
      </div>


    </div>

    <!-- Collapsible Section for More Products -->
    <div class="collapse" id="collapseClothes">
      <div class="row">
        <!-- Additional Product Cards -->
        <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card" data-bs-toggle="modal" data-bs-target="#crochet-clothes5">
            <img src="img/clothes5.jpg" class="card-img-top" alt="Crochet Clothes 5">
            <div class="card-body">
              <h5 class="card-title">Radiant Weave Top</h5>
              <p class="card-text">PHP 119.99</p>
              <p class="card-text">4.3 <i class="fa-solid fa-star"></i>(1,451)</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card" data-bs-toggle="modal" data-bs-target="#crochet-clothes6">
            <img src="img/clothes6.jpg" class="card-img-top" alt="Crochet Clothes 6">
            <div class="card-body">
              <h5 class="card-title">Pattern Pullover</h5>
              <p class="card-text">PHP 199.99</p>
              <p class="card-text">4.1 <i class="fa-solid fa-star"></i>(1,003)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- "Show More" Dropdown Button for Category 2 -->
    <button class="btn btn-link show-more" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClothes"
      aria-expanded="false" aria-controls="collapseScarves">
      Show More Crochet Clothes
    </button>
  </div>
  </div>

  <div id="modal-container">
      <!-- Modals will go here -->
      <!-- Modals for Product Details -->
      <!--Hats-->
      <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Black & White Beat</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hat1.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Black & White Beat</p>
              <p><strong>Price: PHP 179.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Black & White Beat" data-price="179.99" data-img="img/hat1.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal2" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Blissful Hues</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hat2.jpg" class="img-fluid" alt="Crochet Hat 2">
              <p>Blissful Hues</p>
              <p><strong>Price: PHP 159.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Blissful Hues" data-price="159.99" data-img="img/hat2.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal3" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Reggae Rhythm</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hat3.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Reggae Rhythm</p>
              <p><strong>Price: PHP 135.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Reggae Rhythm" data-price="135.99" data-img="img/hat3.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal4" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Grape Smoke</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hat4.jpg" class="img-fluid" alt="Crochet Hat 4">
              <p>Grape Smoke</p>
              <p><strong>Price: PHP 120.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Grape Smoke" data-price="120.99" data-img="img/hat4.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal1.1" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Pacific Blues</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hat5.jpg" class="img-fluid" alt="Crochet Hat 5">
              <p>Pacific Blues</p>
              <p><strong>Price: PHP 105.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Pacific Blues" data-price="105.99" data-img="img/hat5.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal1.2" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Peachy Keen</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/hat6.jpg" class="img-fluid" alt="Crochet Hat 6">
              <p>Peachy Keen</p>
              <p><strong>Price: PHP 99.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Peachy Keen" data-price="99.99" data-img="img/hat6.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>

      <!--Scarves-->
      <div class="modal fade" id="productModal5" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Rustic Warmth</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/scarf1.jpg" class="img-fluid" alt="Crochet Scarf 1">
              <p>Rustic Warmth</p>
              <p><strong>Price: PHP 199.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Rustic Warmth" data-price="199.99" data-img="img/scarf1.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal6" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Blushed Mocha</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/scarf2.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Blushed Mocha</p>
              <p><strong>Price: PHP 169.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Blushed Mocha" data-price="169.99" data-img="img/scarf2.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal7" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Midnight Scarlet</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/scarf3.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Midnight Scarlet</p>
              <p><strong>Price: PHP 140.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Midnight Scarlet" data-price="140.99" data-img="img/scarf3.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal8" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Ethereal Beige</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/scarf4.jpg" class="img-fluid" alt="Crochet Hat 4">
              <p>Ethereal Beige</p>
              <p><strong>Price: PHP 125.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Ethereal Beige" data-price="125.99" data-img="img/scarf4.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal2.1" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Cloud Nine</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/scarf5.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Cloud Nine</p>
              <p><strong>Price: PHP 110.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Cloud Nine" data-price="110.99" data-img="img/scarf5.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="productModal2.2" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Dawn Fog</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/scarf6.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Dawn Fog</p>
              <p><strong>Price: PHP 99.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Dawn Fog" data-price="99.99" data-img="img/scarf6.jpg">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>

      <!--Clothes-->
      <div class="modal fade" id="crochet-clothes1" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Flora Flutter Top</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/clothes1.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Flora Flutter Top</p>
              <p><strong>Price: PHP 199.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Flora Flutter Top" data-price="199.99" data-img="img/clothes1.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="crochet-clothes2" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Whispering Willow Tee</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/clothes2.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Whispering Willow Tee</p>
              <p><strong>Price: PHP 169.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Whispering Willow Tee" data-price="169.99" data-img="img/clothes2.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="crochet-clothes3" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Seashell Breeze Halter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/clothes3.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Seashell Breeze Halter</p>
              <p><strong>Price: PHP 149.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Seashell Breeze Halter" data-price="149.99" data-img="img/clothes3.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="crochet-clothes4" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Autumn Thread Blooms</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/clothes4.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Autumn Thread Blooms</p>
              <p><strong>Price: PHP 179.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Autumn Thread Blooms" data-price="179.99" data-img="img/clothes4.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="crochet-clothes5" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Radiant Weave Top</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/clothes5.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Radiant Weave Top</p>
              <p><strong>Price: PHP 119.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Radiant Weave Top" data-price="119.99" data-img="img/clothes5.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="crochet-clothes6" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="productModalLabel">Pattern Pullover</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="img/clothes6.jpg" class="img-fluid" alt="Crochet Hat 1">
              <p>Pattern Pullover</p>
              <p><strong>Price: PHP 199.99</strong></p>
              <button class="btn btn-primary add-to-cart" data-name="Pattern Pullover" data-price="199.99" data-img="img/clothes6.jpg" type="submit">Add to Cart</button>
            </div>
            </div>
          </div>
        </div>
      </div>



      <!--Checkout modal-->
      <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="checkoutForm">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="userName" required>
                        </div>
                        <div class="mb-3">
                            <label for="userAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="userAddress" rows="3" required></textarea>
                        </div>
                        <div class="col-md-3">
                          <label for="regions" class="form-label">Region</label>
                          <select class="form-select" id="regions" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Region I - Ilocos</option>
                            <option>CAR - Cordillera Administrative Region</option>
                            <option>Region II - Cagayan Valley</option>
                            <option>NCR - National Capital Region</option>
                            <option>Region IV-A - Calabarzon</option>
                            <option>Region IV-B - MIMAROPA</option>
                            <option>Region V - Bicol</option>
                            <option>Region VI - Western Visayas</option>
                            <option>Region VII - Central Visayas</option>
                            <option>Region VIII - Eastern Visayas</option>
                            <option>Region IX - Zamboanga Peninsula</option>
                            <option>Region X - Northern Mindanao</option>
                            <option>Region XII - SOCCSKSARGEN</option>
                            <option>Region XIII - Caraga</option>
                            <option>BARMM - Bangsamoro Autonomous Region in Muslim Mindanao</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid region.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationCustom05" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="mb-3">
                          <h5><strong>Payment Options:</strong> <span id="paymentOptions"></span></h5>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="cdo">
                            <label class="form-check-label" for="cdo">
                              Cash-on-delivery
                            </label>
                          </div>
                          
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="online">
                            <label class="form-check-label" for="online">
                              Online
                            </label>
                          </div>
                          
                        <div class="mb-3">
                            <h5><strong>Payment Details:</strong> <span id="paymentDetails"></span></h5>
                            <p><strong>Product:</strong> <span id="checkoutProductName"></span></p>
                            <p><strong>Price:</strong> PHP <span id="checkoutProductPrice"></span></p>
                            <p><strong>Shipping Fee:</strong> PHP 50<span id="shippingFee"></span></p>
                            <p><strong>Total:</strong> PHP 50<span id="totalFee" data-price="50"></span></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmCheckout">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    
  </div>



<!--footer-->
  <footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <section class="mb-4">
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin"></i></a>
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
  <script src="gallery.js"></script>
</body>

</html>