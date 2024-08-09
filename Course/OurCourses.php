<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Courses</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">



</head>

<body>

  <header class="header-bg">
    <div class="h-bg">
      <div class="container">
        <div class="row align justify">
          <div class="col">
            <div class="logo">

              <ul>
                <li> <img src="./assets/img/MTC_logo_V2-02 5.png" alt="" loading="lazy"></li>
                <li class="logo-text">

                </li>
              </ul>


            </div>
          </div>
          <div class="navbar">
            <a href="index.html">HOME</a>
            <a href="About.html">ABOUT US</a>
            <div class="dropdown">
              <!-- <a href="Our Courses.html"></a> -->

              <button class="dropbtn">OUR COURSES <a href="Our Courses.html"></a>
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#">1. Advanced Infertility</a>
                <a href="#">2. Advanced Sonography</a>
                <a href="#">3. Advanced Laparoscopy</a>
                <a href="#">4. Certified Clinical ART & Embryology Course</a>

              </div>
            </div>
            <a href="Photogallary.html">GALLARY</a>
            <a href="Contact.html">CONTACT US</a>

          </div>

          <div class="col">
            <div class="button-1">
              <button>Enroll Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>






  <div class="icon-bar">
    <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#" class="twitter"><i class="fa-brands fa-instagram"></i></a>
    <a href="#" class="google"><i class="fa-brands fa-google"></i></i></a>
    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
  </div>






  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./assets/img/motherhood-banner-4k-3d.png" style="width:100%" loading="lazy">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./assets/img/Banner 4 header.webp" style="width:100%" loading="lazy">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./assets/img/Banner 2 header new.webp" style="width:100%" loading="lazy">
      <div class="text"></div>
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>


  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      // dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>



  <section class="couse-sec">
    <div class="container">
      <div class="two-course">
        <h1>Our Courses</h1>
      </div>
      <!-- <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'London')">fogsi Recognized Course  </button>
        <button class="tablinks-1" onclick="openCity(event, 'Paris')">flogship Recognized Course  </button>
    </div> -->

      <div id="London" class="tabcontent" style="display:block;">
        <!-- <h3>London</h3>
        <p>London is the capital city of England.</p> -->
        <div class="box-10">
          <div class="row align justify">
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
          </div>
        </div>
      </div>

      <div id="Paris" class="tabcontent" style="display:block;">
        <div class="box-10">
          <div class="row align justify">
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f-2.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f-2.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f-2.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
            <div class="col_20">
              <!-- <div class="box" > -->
              <img src="./assets/img/f-2.png" alt="" loading="lazy">
              <h1>Advanced Infertility</h1>
              <button>Read More</button>

            </div>
          </div>
        </div>
      </div>
  </section>


  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>







  <footer id="Foot_bg">
    <div class="container">
      <div class="row justify">
        <div class="col_37">
          <div class="Foter_text">
            <!-- <h4>Title Here</h4> -->
            <div class="logo">

              <ul>
                <li> <img src="./assets/img/MTC_logo_V2-02 5.png" alt="" loading="lazy"></li>
                <li class="logo-text">

                </li>
              </ul>


            </div>
            <p>Motherhood Hospital, established on October 21, 2012, has been a prominent healthcare institution with over 12 years of dedicated service in the field of Gynaecolog</p>
            <ul>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
          </div>

        </div>
        <div class="col_60">
          <div class="Foter_last">

            <div class="row justify">
              <div class="col-28">
                <div class="footer_txt">
                  <h2>Our Training</h2>
                  <a href="#">Advanced Infertility</a>
                  <a href="#">Advanced Sonography</a>
                  <a href="#">Advanced Laparoscopy</a>
                  <a href="#">Certified Clinical ART & Embryology Course</a>

                </div>
              </div>
              <div class="col-27">
                <div class="footer_txt-1">
                  <h2>Quick Links</h2>
                  <a href="#">About Us</a>
                  <a href="#">Courses</a>
                  <a href="#">gallary</a>
                  <a href="#">online form</a>
                  <a href="#">Contact us</a>

                </div>
              </div>
              <div class="col-42">
                <div class="footer_txt-2">
                  <h2>Contact Us</h2>
                  <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <a href="#">1st Floor, Sarjan Arcade, Science City Rd, Above Axis Bank, Sola, Ahmedabad, Gujarat 380060</a>
                  </li>
                  <li>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="#">operations@motherhoodh<br>ospital.com</a>
                  </li>


                  <li>
                    <i class="fa-solid fa-phone"></i>
                    <a href="#">+91 9558583559</a>
                  </li>

                  <br>
                  <li>
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="#">+91 9558583559</a>
                  </li>



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
        <p>Copyright 2024. All Rights Reserved <span>Motherhood Tranning Center</span></p>
        <p>Designed and Devloped By <span><a href="https://fleek.media/">fleek.media</a></span></p>
      </div>
    </div>
  </div>

  <link rel="stylesheet" href="main.js">

</body>

</html>