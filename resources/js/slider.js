try {
    // Получаем все элементы слайдера
    const sliderItems = [
        document.getElementById('slider-item-1'),
        document.getElementById('slider-item-2'),
        document.getElementById('slider-item-3')
    ];

    // Кнопки навигации
    const nextButton = document.getElementById('next_btn');
    const prevButton = document.getElementById('prev_btn');

    if (!nextButton || !prevButton) {
        throw new Error("Кнопки навигации не найдены");
    }

    if (sliderItems.some(item => item === null)) {
        throw new Error("Один или несколько элементов слайдера не найдены");
    }

    // Текущий индекс активного слайда
    let currentIndex = 0;

    // Функция показа следующего слайда
    function showNextSlide() {
        // Скрыть текущий слайд и показать следующий.
        sliderItems[currentIndex].classList.remove('visible');
        sliderItems[currentIndex].classList.add('hidden');

        currentIndex++;
        
        if (currentIndex >= sliderItems.length) {
            currentIndex = 0;
        }

        sliderItems[currentIndex].classList.remove('hidden');
        sliderItems[currentIndex].classList.add('visible');
        
     }

     // Функция показа предыдущего слайда.
     function showPrevSlide() { 
         sliderItems[currentIndex].classList.remove('visible'); 
         sliderItems[currentIndex].classList.add('hidden'); 

         if (currentIndex <= 0) { 
             currentIndex = sliderItems.length - 1; 
         } else { 
             currentIndex--; 
         }
  
          // Показать новый активный слайд.  
          sliderItems[currentIndex].classList.remove("hidden");  
          sliderItems[currentIndex].classList.add("visible");   
      }  

      nextButton.addEventListener("click", showNextSlide);
      prevButton.addEventListener("click", showPrevSlide);

} catch (error) {
   console.error(error.message);
}