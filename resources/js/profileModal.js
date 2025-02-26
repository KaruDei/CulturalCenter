try {
const modal = document.querySelector(".modalWindow-container")
const closeButton =document.querySelector(".button-close")
let modalBody = document.querySelector(".modalWindow-body")
let labelID = document.getElementById("labelID")
let inputFullname = document.getElementById("inputFullname")
let inputEmail = document.getElementById("inputEmail")
let labelPicture = document.getElementById("labelPicture")
const button = document.getElementById("button-edit-profile");
button.addEventListener('click', function() {
    let a = button.id
    let parentDiv = button.parentElement.parentElement.parentElement;
    modal.style.display = "flex"
});


closeButton.addEventListener('click', function(){
     modal.style.display = "none"
})
} catch (error) {
    
}