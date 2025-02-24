try {
    let buttons = []
let i = 1
const modal = document.querySelector(".modalWindow-container")
const closeButton =document.querySelector(".button-close")
let modalBody = document.querySelector(".modalWindow-body")
let labelID = document.getElementById("labelID")
let inputFullname = document.getElementById("inputFullname")
let inputEmail = document.getElementById("inputEmail")
let labelPicture = document.getElementById("labelPicture")

while (true) {
    let button = document.getElementById(`button-edit-${i}`);
    if (button === null) {
      break;
    }
    buttons.push(button);
    i++
}

buttons.forEach(button => {
    button.addEventListener('click', function() {
        let a = button.id
        let parentDiv = button.parentElement.parentElement.parentElement;
        modal.style.display = "flex"
        labelID.value = parentDiv.children[0].innerHTML 
        inputFullname.value = parentDiv.children[1].innerHTML 
        inputEmail.value = parentDiv.children[2].innerHTML
        labelPicture.src = parentDiv.children[3].children[0].src
    });
});

closeButton.addEventListener('click', function(){
     modal.style.display = "none"
})


console.log(buttons)
} catch (error) {
    
}