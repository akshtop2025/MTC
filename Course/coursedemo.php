<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Courses</title>

        <!-- CSS Reset -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <!-- Aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Swiper CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css">

        <!-- Include Owl Carousel CSS
        <link rel="stylesheet" href="path/to/owl.carousel.min.css">
        <link rel="stylesheet" href="path/to/owl.theme.default.min.css"> -->
        <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- font-awesome -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Favicon -->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    </head>
<body>


      <!-- <div class="container"> -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand m-0" href="index.html">
                    <img class="img-fluid" src="./assets/img/mmm.png"
                        alt="logo" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center"
                    id="navbarSupportedContent">
                    <ul
                        class="navbar-nav me-auto col-lg-10 justify-content-end  mb-2 mb-lg-0">
                        <li class="nav-item px-2">
                            <a
                                class="nav-link color fs-6 fw-bold text-uppercase"
                                aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link color fs-6 fw-bold "
                                href="About.html">ABOUT US</a>
                        </li>
                        <li class="nav-item px-2 dropdown">
                            <a class="nav-link color fs-6 fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                COURSES
                            </a>
                            <ul class="dropdown-menu" id="coursesDropdown">
                                <li><a class="dropdown-item fw-semibold color" href="course1.html">1. Advanced Infertility</a></li>
                                <li><a class="dropdown-item fw-semibold color" href="#">2. Advanced Sonography</a></li>
                                <li><a class="dropdown-item fw-semibold color" href="#">3. Advanced Laparoscopy</a></li>
                                <li><a class="dropdown-item fw-semibold color" href="#">4. Certified Clinical ART & Embryology Course</a></li>
                            </ul>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link color fs-6 fw-bold "
                                href="#">GALLARY</a>
                        </li>
                        <li class="nav-item px-2">
                            <a
                                class="nav-link color fs-6 fw-bold  text-uppercase"
                                href="Contact.html">CONTACT us</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn text-white text-uppercase"
                            type="submit"
                            style="background-color: #0F3B66;">Enroll
                            now</button>
                    </form>
                </div>
            </div>
        </nav>

        <script>
              document.addEventListener("DOMContentLoaded", function() {
            var dropdownToggle = document.querySelector('.dropdown-toggle');
            var dropdownMenu = document.querySelector('#coursesDropdown');

            dropdownToggle.addEventListener('click', function() {
                dropdownMenu.classList.toggle('show-dropdown');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!dropdownToggle.contains(event.target)) {
                    dropdownMenu.classList.remove('show-dropdown');
                }
            });
        });
        </script>
        <style>
            /* CSS for dropdown animation */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.8s ease-out;
}

.dropdown-menu.show-dropdown {
    max-height: 500px; /* Adjust height as needed */
}




.more-content {
    display: none;
}
        </style>





























    <footer class="Foot_bg back-color py-4">
        <div class="container">
            <div class="row justify">
                <div class="col-12 col-md-3 col-lg-4">
                    <div class="Foter_text">
                        <!-- <h4>Title Here</h4> -->
                        <div class="logo">

                            <ul
                                class="p-0 text-lg-start text-md-start text-center mx-auto mx-lg-0 mx-md-0">
                                <li> <img src="./assets/img/MTC.svg"
                                        alt loading="lazy"></li>

                            </ul>

                        </div>
                        <p
                            class="font-size-1rem text-lg-start text-md-start color text-center">Motherhood
                            Training Center - A
                            subsidiary of Motherhood
                            Women’s &amp; Child Care Hospital, offers
                            FOGSI-certified as
                            well
                            as fellowship (Hands-On) courses to practising
                            Obstetricians
                            and Gynecologists for industry expertise in the
                            fields of
                            Infertility, Sonography, Laparoscopy and
                            Embryology.
                        </p>
                        <ul class="text-md-start text-lg-start text-center">
                            <li><a
                                    class="facebook rounded-1 text-md-start text-lg-start text-center"
                                    href="https://www.instagram.com/motherhoodtrainingcenter/"><i
                                        class="fa-brands fa-instagram  text-white  font-size-2rem"></i></a></li>

                            <li><a
                                    class="facebook rounded-1 text-md-start text-lg-start text-center"
                                    href="https://www.facebook.com/motherhoodtrainingcenter"><i
                                        class="fa-brands fa-facebook  text-white font-size-2rem"></i></a>
                            </li>
                            <li><a
                                    class="facebook rounded-1 text-md-start text-lg-start text-center"
                                    href="https://www.linkedin.com/company/motherhood-training-center/"><i
                                        class="fa-brands fa-linkedin-in  text-white font-size-2rem"></i></a></li>
                            <li><a
                                    class="facebook rounded-1 text-md-start text-lg-start text-center"
                                    href="#"><i
                                        class="fa-brands fa-whatsapp  text-white font-size-2rem"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 align-self-center">
                    <div class="Foter_last">
                        <div class="row justify">
                            <div class="col-12 col-md-3 col-lg-3">
                                <div class="footer_txt">
                                    <h4
                                        class="text-md-start fw-bold text-lg-start text-center color-1">Our
                                        Training</h4>
                                    <h6
                                        class="text-md-start fw-bold text-lg-start color text-center">FOGSI
                                        Recognized Courses</h6>
                                    <a
                                        class="d-block p-2 fs-6 text-md-start text-lg-start text-center color"
                                        href="#">Advanced
                                        Infertility</a>
                                    <a
                                        class="d-block p-2 fs-6 text-md-start text-lg-start text-center color"
                                        href="#">Advanced
                                        Sonography</a>
                                    <a
                                        class="d-block p-2 fs-6 text-md-start text-lg-start text-center color"
                                        href="#">Advanced
                                        Laparoscopy</a>
                                </div>
                            </div>

                            <div
                                class="col-12 d-flex align-self-end col-md-4  col-lg-6">
                                <div class="footer_txt-2 col-6 ">
                                    <!-- <h2></h2> -->
                                    <h6
                                        class="color fw-bold text-md-start text-lg-start text-center">Fellowship
                                        / Hands-on Training
                                        Courses</h6>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">Advanced
                                        Infertility</a>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">Advanced
                                        Sonography</a>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">Advanced
                                        Laparoscopy</a>
                                </div>
                                <div class="footer_txt-2 col-6 ">
                                    <!-- <h2></h2> -->
                                    <h6
                                        class="color fw-bold text-md-start text-lg-start text-start">Certified
                                        Clinical ART &amp; Embryology
                                        Course</h6>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">observationship</a>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">Fellowship (Basic)</a>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">Fellowship (Advanced)</a>
                                    <a
                                        class="d-block fs-6 p-2 text-md-start text-lg-start text-center color"
                                        href="#">Embryo Biopsy or PGT</a>

                                </div>
                            </div>
                            <div class="col-12  col-md-3 col-lg-3">
                                <div class="footer_txt-1 ">
                                    <h4
                                        class="text-md-start fw-bold text-lg-start text-center color-1">Quick
                                        Links</h4>
                                    <a
                                        class="d-block  text-under-line text-md-start text-lg-start text-center color fs-6"
                                        href="#">Home</a>
                                    <a
                                        class="d-block  text-under-line text-md-start text-lg-start text-center color fs-6"
                                        href="About.html">About Us</a>
                                    <a
                                        class="d-block  text-under-line text-md-start text-lg-start text-center color fs-6"
                                        href="Courses">Courses</a>
                                    <a
                                        class="d-block  text-under-line text-md-start text-lg-start text-center color fs-6"
                                        href="Photo gallary">Photo
                                        gallary</a>
                                    <a
                                        class="d-block  text-under-line text-md-start text-lg-start text-center color fs-6"
                                        href="Contact us">Contact us</a>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>

    <div class="design-section">
        <div class="container">
            <div class="row ali justify">
                <p
                    class="col-lg-6 col-md-6 col-12 text-center text-md-start text-lg-start m-0">Copyright
                    2024. All Rights Reserved
                    <span>Motherhood Training
                        Center</span>
                </p>
                <p
                    class="col-lg-6 col-md-6 col-12 text-center text-md-end text-lg-end m-0">Designed
                    and Devloped By <span><a
                            href="https://fleek.media/">fleek.media</a></span></p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!-- Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Include jQuery
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    Include Owl Carousel JS
    <script src="path/to/owl.carousel.min.js"></script> -->
    <!-- Include jQuery -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Owl Carousel JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/mainnew.js"></script>

</body>

</html>