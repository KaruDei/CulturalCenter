if(window.location.href == "http://127.0.0.1:8000/admin/events"){
    let buttons = []
    let i = 1;
    let eventID = document.getElementById('eventID')
    let inputs = document.querySelectorAll('.form-input')
    let type_select = document.getElementById('type-select')
    let room_select = document.getElementById('room-select')
    let status_select = document.getElementById('status-select')
    const closeButton =document.querySelector(".button-close")
    const modal = document.querySelector(".modalWindow-container")

    const eventStatuses = window.eventStatuses.map(status => status.status);
    const eventType = window.eventTypes.map(type => type.type);
    const eventRoom = window.rooms.map(number => number.number);
    console.log(eventStatuses, eventType, eventRoom);

    while(true){
        let button = document.getElementById(`admin-event-button-edit-${i}`);
        if (button === null) {
            break;
        }
        buttons.push(button);
        i++
    }
    eventType.forEach(type => {
        const option = document.createElement('option');
        option.value = type;
        option.textContent = type;
        type_select.appendChild(option);
    });
    eventRoom.forEach(room => {
        const option = document.createElement('option');
        option.value = room;
        option.textContent = room;
        room_select.appendChild(option);
    });
    eventStatuses.forEach(status => {
        const option = document.createElement('option');
        option.value = status;
        option.textContent = status;
        // Укажите нужный select для типа события
        // Например, если у вас есть select с id 'event-type-select'
        status_select.appendChild(option);
    });
    buttons.forEach(button => {
            button.addEventListener('click', function() {
                let j = 0
                let parentDiv = button.parentElement.parentElement.parentElement;
                console.log()
                modal.style.display = "flex"
                inputs.forEach(input => {
                    input.value = parentDiv.children[j].textContent
                    j++
                });
                eventID = parentDiv.children[13]
                console.log(eventID)
            });
        });


    closeButton.addEventListener('click', function(){
        modal.style.display = "none"
    })    
}