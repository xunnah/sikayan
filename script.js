const navLinks = document.querySelectorAll('.nav__link');

navLinks.forEach((link) => {
    link.addEventListener('click', () => {
        navLinks.forEach((navLink) => {
            navLink.classList.remove('nav__link--active');
        });
        link.classList.add('nav__link--active');
    });
});

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
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}

const yourElements = document.querySelectorAll('.geser');

function removeJustifyContent(element) {
  element.style.justifyContent = 'initial';
}

function restoreJustifyContent(element) {
  element.style.justifyContent = 'center';
}

function checkScreenWidth() {
  const screenWidth = window.innerWidth;
  yourElements.forEach((element) => {
    if (screenWidth <= 1346) {
      removeJustifyContent(element);
    } else {
      restoreJustifyContent(element);
    }
  });
}

checkScreenWidth();

window.addEventListener('resize', checkScreenWidth);
