$(document).ready(function () {
   let slideCount = $('.slide').length;
   let currentIndex = 0;
   let autoSlajd;

   function moveSlider(index) {
       const newTransformValue = -index * 100;
       $('.slider').css('transform', 'translateX(' + newTransformValue + '%)');
   }

   function startautoslajd() {
      autoSlajd = setInterval(function () {
           currentIndex++;
           if (currentIndex >= slideCount) {
               currentIndex = 0;
           }
           moveSlider(currentIndex);
       }, 10000);
   }

   $('.prev').on('click', function () {
       currentIndex--;
       if (currentIndex < 0) {
           currentIndex = slideCount - 1;
       }
       moveSlider(currentIndex);
       resetAutoSlide();
   });

   $('.next').on('click', function () {
       currentIndex++;
       if (currentIndex >= slideCount) {
           currentIndex = 0;
       }
       moveSlider(currentIndex);
       resetAutoSlide();
   });

   function resetAutoSlide() {
       clearInterval(autoSlajd);
       startautoslajd();
   }

   startautoslajd(); 
});