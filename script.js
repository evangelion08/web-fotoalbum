class CatSlideshow {
    constructor() {
      this.slideIndex = 1;
      this.slides = document.getElementsByClassName("slide");
      this.caption = document.getElementById("caption");
  
      this.showSlides(this.slideIndex);
    }
  
    plusSlides(n) {
      this.showSlides((this.slideIndex += n));
    }
  
    currentSlide(n) {
      this.showSlides((this.slideIndex = n));
    }
  
    showSlides(n) {
      let i;
  
      if (n > this.slides.length) {
        this.slideIndex = 1;
      }
  
      if (n < 1) {
        this.slideIndex = this.slides.length;
      }
  
      for (i = 0; i < this.slides.length; i++) {
        this.slides[i].style.display = "none";
      }
  
      this.slides[this.slideIndex - 1].style.display = "block";
      this.caption.innerHTML = this.slideIndex + " / " + this.slides.length;
    }
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    const catSlideshow = new CatSlideshow();
  
    document.querySelector(".prev").addEventListener("click", function () {
      catSlideshow.plusSlides(-1);
    });
  
    document.querySelector(".next").addEventListener("click", function () {
      catSlideshow.plusSlides(1);
    });
  });
  