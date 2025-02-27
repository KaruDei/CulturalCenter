if(window.location.href == "http://127.0.0.1:8000/admin/news" || window.location.href == "http://127.0.0.1:8000/admin/news?"){
    let buttons = []
    let i = 1;
    let inputs = document.querySelectorAll('.form-input')
    const closeButton =document.querySelector(".button-close")
    const modal = document.querySelector(".modalWindow-container")

    while(true){
        let button = document.getElementById(`admin-news-button-edit-${i}`);
        if (button === null) {
            break;
        }
        buttons.push(button);
        i++
        
    }
    buttons.forEach(button => {
            button.addEventListener('click', function() {
                let j = 0
                let parentDiv = button.parentElement.parentElement.parentElement;
                modal.style.display = "flex"
                document.getElementById("exhibition_picture").src = parentDiv.children[3].children[0].src

                inputs.forEach(input => {
                    if(input.id == "inputPicture" || input.className == "asd"){
                        j++
                        console.log(input)
                    }else{
                        console.log(parentDiv.children[j].textContent)
                        input.value = parentDiv.children[j].textContent
                        
                    j++
                    }
                });
            });
        });


    closeButton.addEventListener('click', function(){
        modal.style.display = "none"
    })    
}