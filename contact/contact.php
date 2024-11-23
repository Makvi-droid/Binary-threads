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
            <img src="img/logo3.png" class="img-fluid" alt="..." id="logo">
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
                <h2 class="text-center" id="contact-h2">Contact Us</h2>
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
                <form id="contactForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        <div class="invalid-feedback">Please enter a message.</div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
                
                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmModalLabel">Confirm Submission of Contact Form?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to submit the contact form?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="confirmSubmit">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Success Modal -->
                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Form Successfully Sent</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Your form has been successfully submitted. Thank you for your message.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
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

    <script src="contact.js"></script>
</body>

</html>