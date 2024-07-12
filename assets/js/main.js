// window.onload = function () {
//   document.getElementById('popupOverlay').style.display = 'block';
// }

// function closePopup() {
//   document.getElementById('popupOverlay').style.display = 'none';
// }


/* .........toggle button...... */




// let slideIndex = 0;
// showSlides();

// function showSlides() {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) { slideIndex = 1 }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex - 1].style.display = "block";
//   dots[slideIndex - 1].className += " active";
//   setTimeout(showSlides, 2000); 
// }



// const button = document.querySelector(".button");
// button.addEventListener("click", (e) => {
//   e.preventDefault;
//   button.classList.add("animate");
//   setTimeout(() => {
//     button.classList.remove("animate");
//   }, 600);
// });

// read more

// function myFunction() {
//   var dots = document.getElementById("dots");
//   var moreText = document.getElementById("more");
//   var btnText = document.getElementById("myBtn");

//   if (dots.style.display === "none") {
//     dots.style.display = "inline";
//     btnText.innerHTML = "Read more";
//     moreText.style.display = "none";
//   } else {
//     dots.style.display = "none";
//     btnText.innerHTML = "Read less";
//     moreText.style.display = "inline";
//   }
// }
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



//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */


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
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,           // Show 3 slides at a time
  slidesToScroll: 1,          // Scroll 1 slide at a time
  spaceBetween: 20,           // Space between slides
  autoplay: {
      delay: 3000,            // Delay between slides in ms
      disableOnInteraction: false, // Continue autoplay after user interactions
  },
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  breakpoints: {
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
// profile