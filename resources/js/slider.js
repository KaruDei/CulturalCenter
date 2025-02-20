try {
    const sliderItems = [
        document.getElementById('slider-item-1'),
        document.getElementById('slider-item-2'),
        document.getElementById('slider-item-3')
    ];
    let nextButton = document.getElementById('next_btn');
    let prevButton = document.getElementById('prev_btn');
    let currentIndex = 0;

    nextButton.onclick = function() {

        sliderItems[currentIndex].classList.remove('opacity-100');
        sliderItems[currentIndex].classList.add('opacity-0');

        currentIndex++;
        
        if (currentIndex >= sliderItems.length) {
            currentIndex = 0;
        }

        sliderItems[currentIndex].classList.remove('opacity-0');
        sliderItems[currentIndex].classList.add('opacity-100');
        
     }
     prevButton.onclick = function() { 
         sliderItems[currentIndex].classList.remove('opacity-100'); 
         sliderItems[currentIndex].classList.add('opacity-0'); 

         if (currentIndex <= 0) { 
             currentIndex = sliderItems.length - 1; 
         } else { 
             currentIndex--; 
         }
   
          sliderItems[currentIndex].classList.remove("opacity-0");  
          sliderItems[currentIndex].classList.add("opacity-100");   
      }  

} catch (error) {
   console.error(error.message);
}