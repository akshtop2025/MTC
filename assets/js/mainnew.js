// header
$(document).ready(function () {
  // Toggle mobile menu
  $('#menu').click(function (e) {
      e.preventDefault();
      var mobileMenu = $(this).next();
      if (mobileMenu.is(":visible")) {
          mobileMenu.slideUp(200);
          $(this).removeClass('activeMenu');
      } else {
          mobileMenu.slideDown(200);
          $(this).addClass('activeMenu');
      }
  });

  // Handle window resize
  $(window).resize(function () {
      var screenWidth = $(window).width();
      if (screenWidth > 767) {
          $("nav > ul.et-mobile-menu:visible").hide();
      }
  });

  // Toggle dropdown menu
  $('.nav-item.setActive').click(function () {
      $(this).find('.dropdown-menu').slideToggle(200);
      $(this).toggleClass('active');
  });
});


document.getElementById('parentCat_1').addEventListener('click', function() {
  var dropdownMenu = document.getElementById('1');
  dropdownMenu.classList.toggle('show');
});
// header







AOS.init();


// read more
function toggleContent() {
  var content = document.getElementById("more-content");
  var btn = document.getElementById("read-more-btn");
  
  if (content.style.display === "none") {
      content.style.display = "block";
      btn.textContent = "Read Less";
  } else {
      content.style.display = "none";
      btn.textContent = "Read More";
  }
}

  
  // read more

// filter
// Function to handle tab switching
function showContent(evt, contentId) {
    var i, tabcontent, tablinks;
  
    // Get all elements with class="content" and hide them
    tabcontent = document.getElementsByClassName("content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab and add an "active" class to the button that opened the tab
    document.getElementById(contentId).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Initialize the first tab as active
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.tablinks').click(); // Trigger a click on the first tab to show it
  });
  
  // filter

// profile
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,           // Default: Show 4 slides at a time
        slidesToScroll: 1,          // Default: Scroll 1 slide at a time
        spaceBetween: 5,            // Space between slides
        dots: true,
        autoplay: {
            delay: 5000,            // Delay between slides in ms
            disableOnInteraction: false, // Continue autoplay after user interactions
        },
        
        breakpoints: {
            320: {
                slidesPerView: 1,
                slidesToScroll: 1,
            },
            540: {
                slidesPerView: 1,
                slidesToScroll: 1,
            },
            640: {
                slidesPerView: 1,
                slidesToScroll: 1,
            },
            768: {
                slidesPerView: 2,
                slidesToScroll: 1,
            },
            1024: {
                slidesPerView: 3,
                slidesToScroll: 1,
            },
        },
    });
});


  // profile

// logos slider
document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.logos-swiper-container', {
      loop: true,
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      autoplay: {
          delay: 3000,
          disableOnInteraction: false,
      },
      lazy: {
          loadPrevNext: true,
      },
      breakpoints: {
          // When window width is >= 320px
          320: {
              slidesPerView: 1,
              spaceBetween: 10,
          },
          // When window width is >= 480px
          480: {
              slidesPerView: 2,
              spaceBetween: 20,
          },
          // When window width is >= 640px
          640: {
              slidesPerView: 3,
              spaceBetween: 30,
          },
          // When window width is >= 1024px
          1024: {
              slidesPerView: 4,
              spaceBetween: 40,
          },
      },
  });
});
// logos slider


//   Our Trained Fellow Doctors
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.my-swiper-container', {
      slidesPerView: 4,           // Default: Show 4 slides at a time
      slidesToScroll: 1,          // Default: Scroll 1 slide at a time
      spaceBetween: 10,            // Space between slides
      autoplay: {
        delay: 4000,              // Delay between slides in ms
        disableOnInteraction: false, // Continue autoplay after user interactions
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          slidesToScroll: 1,
        },
        540: {
          slidesPerView: 1,
          slidesToScroll: 1,
        },
        640: {
          slidesPerView: 1,
          slidesToScroll: 1,
        },
        768: {
          slidesPerView: 2,
          slidesToScroll: 1,
        },
        1024: {
          slidesPerView: 3,
          slidesToScroll: 1,
        },
      },
    });
  });
  
  
  
//   Our Trained Fellow Doctors


// youtube slier
document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.custom-swiper-container', {
      // Optional parameters
      loop: true,
      autoplay: {
          delay: 4000,
          disableOnInteraction: false,
      },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      breakpoints: {
          // when window width is >= 320px
          320: {
              slidesPerView: 1,
              spaceBetween: 20
          },
          // when window width is >= 640px
          640: {
              slidesPerView: 2,
              spaceBetween: 30
          },
          // when window width is >= 1024px
          1024: {
              slidesPerView: 3,
              spaceBetween: 40
          },
          // when window width is >= 1440px
          1440: {
              slidesPerView: 4,
              spaceBetween: 50
          }
      }
  });
});
// youtube slier

// course slider 

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      items: 2, // Display 2 items at a time
      margin: 100, // Margin between items
      nav: true, // Show next and prev buttons
      dots: true, // Show pagination dots
      loop: true, // Loop the items
      autoplayHoverPause: true,
      navText: [
        '<i class="fa fa-chevron-left"></i>', 
        '<i class="fa fa-chevron-right"></i>'
    ],
      autoplay: true, // Auto play'
      
      autoplayTimeout: 3000, // Auto play interval
      autoplayHoverPause: true, // Pause on hover
      responsive: {
          0: {
              items: 1 // Display 1 item on small screens
          },
          600: {
              items: 2 // Display 2 items on medium screens
          },
          1000: {
              items: 2 // Display 2 items on large screens
          }
      },
      slideBy: 1 // Slide one item at a time
  });
});

// course slider