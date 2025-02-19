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

        sliderItems[currentIndex].classList.remove('visible');
        sliderItems[currentIndex].classList.add('hidden');

        currentIndex++;
        
        if (currentIndex >= sliderItems.length) {
            currentIndex = 0;
        }

        sliderItems[currentIndex].classList.remove('hidden');
        sliderItems[currentIndex].classList.add('visible');
        
     }
     prevButton.onclick = function() { 
         sliderItems[currentIndex].classList.remove('visible'); 
         sliderItems[currentIndex].classList.add('hidden'); 

         if (currentIndex <= 0) { 
             currentIndex = sliderItems.length - 1; 
         } else { 
             currentIndex--; 
         }
   
          sliderItems[currentIndex].classList.remove("hidden");  
          sliderItems[currentIndex].classList.add("visible");   
      }  

} catch (error) {
   console.error(error.message);
}