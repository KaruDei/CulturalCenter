if(window.location.href == "http://127.0.0.1:8000/admin/exhibitions"){
    let buttons = []
    let i = 1;
    let eventID = document.getElementById('eventID')
    let inputs = document.querySelectorAll('.form-input')
    const closeButton =document.querySelector(".button-close")
    const modal = document.querySelector(".modalWindow-container")

    while(true){
        let button = document.getElementById(`admin-exhibition-button-edit-${i}`);
        if (button === null) {
            break;
        }
        buttons.push(button);
        i++
        console.log(button)
    }console.log(buttons)
    buttons.forEach(button => {
            button.addEventListener('click', function() {
                let j = 0
                let parentDiv = button.parentElement.parentElement.parentElement;
                console.log()
                modal.style.display = "flex"
                inputs.forEach(input => {

                    j++
                    console.log(input)
                });
            });
        });


    closeButton.addEventListener('click', function(){
        modal.style.display = "none"
    })    
}