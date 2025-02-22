const navList = document.querySelector(".nav-list");
const burgerNavList = document.querySelector(".burger-nav-list");
const burgerButton = document.querySelector(".burger-button")

if (window.innerWidth < 1366) {       
    navList.style.display = "none"
    burgerButton.style.display = "block"
} else {   
    navList.style.display = "flex"
    burgerButton.style.display = "none"
}
window.addEventListener('resize', function() {
    if (window.innerWidth < 1366) {       
        navList.style.display = "none"
        burgerButton.style.display = "block"
    } else {   
        navList.style.display = "flex"
        burgerButton.style.display = "none"
        burgerNavList.style.display = "none";
    }
});

burgerButton.onclick = function() {
    if (burgerNavList.style.display === "none") {
        burgerNavList.style.display = "flex"
        burgerButton.style.transform = "rotate(180deg)"
        
    } else if (burgerNavList.style.display === "flex") {
        burgerNavList.style.display = "none"
        burgerButton.style.transform = "rotate(0deg)"
    
    }
}