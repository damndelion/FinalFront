$(document).ready(function(){
    $("#img1").click(function(){
      $("#img1").animate({
        left: '50px',
        height: '400px',
        width: '400px'
      });
    });
  });
  $(document).ready(function(){
    $("#img2").click(function(){
      $("#img2").animate({
        left: '50px',
        height: '400px',
        width: '400px'
      });
    });
  });

  let slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }