try{    
    const modal = document.querySelector('.modalWindow-container');
    const button = document.getElementById('buttonUpdate');
    const closes = document.querySelector('.button-close');

    console.log(modal, button, closes);

    button.onclick = function(){
        modal.style.visibility = "visible";
        console.log("asdasd")
    }
    closes.onclick = function(){
        modal.style.visibility = "hidden";
    }
}catch(error){
    
}