const sliderItems = [
    document.querySelector(".slider-item-1"),
    document.querySelector(".slider-item-2"),
    document.querySelector(".slider-item-3")
];

let currentIndex = 0;

function nextSlide() {
    sliderItems[currentIndex].style.opacity = "0";
    currentIndex = (currentIndex + 1) % sliderItems.length; 
    sliderItems[currentIndex].style.opacity = "1";
}

function initializeSlider() {
    sliderItems.forEach((item, index) => {
        item.style.opacity = index === 0 ? "1" : "0"; 
    });
}

function startSlider() {
    initializeSlider();
    setInterval(nextSlide, 5000); 
}

startSlider();