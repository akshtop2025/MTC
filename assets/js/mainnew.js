AOS.init();


// read more
function toggleContent() {
    var moreContent = document.getElementById("more-content");
    var btnText = document.getElementById("read-more-btn");
  
    if (moreContent.style.display === "none") {
        moreContent.style.display = "block";
        btnText.innerHTML = "Read Less";
    } else {
        moreContent.style.display = "none";
        btnText.innerHTML = "Read More";
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
        autoplay: {
            delay: 5000,            // Delay between slides in ms
            disableOnInteraction: false, // Continue autoplay after user interactions
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
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




//   Our Trained Fellow Doctors
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.my-swiper-container', {
      slidesPerView: 4,           // Default: Show 4 slides at a time
      slidesToScroll: 1,          // Default: Scroll 1 slide at a time
      spaceBetween: 5,            // Space between slides
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