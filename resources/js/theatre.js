try{
    let labels = [] 
    let seats = []
    let i = 1
    let buy_button = document.querySelector('.buy-button')
    let price = Number(document.getElementById('price').value) 
    while (true) {
        let seat = document.getElementById(`seat-${i}`);
        let label = document.getElementById(`label-${i}`)
        if (seat === null) {
            break;
        }
        if(seat.disabled === true){
            label.style.backgroundColor = "gray"
            label.style.borderColor = "rgb(80,80, 80)"
        }
        const img = document.createElement('img');
        label.textContent = i
        img.src = "/icons/armchair.png"
        img.alt = 'Описание изображения'; // Добавьте описание для доступности
        img.style.width = '100%'; // Установите ширину изображения (при необходимости)
        img.style.height = '100%'; // Установите высоту изображения (при необходимости)
        img.style.marginTop = "-55%" // Добавляем отступ справа от изображения
        label.appendChild(img)        
        labels.push(label)
        seats.push(seat);
        i++
    }
    // seats.forEach(seat => {
    //     seat.addEventListener('click', function() {
    //       if (seat.disabled === false) {
    //         if (labels[seat].style.backgroundColor === "green") {
    //             labels[seat].style.backgroundColor = "red"; // Меняем на красный
    //         } else {
    //             labels[seat].style.backgroundColor = "green"; // Меняем на зеленый
    //         }
    //       } else {
    //         console.log("Этот элемент заблокирован");
    //       }
    //     });
    //   });
    let fullprice = 0
    seats.forEach(seat => {
        seat.addEventListener('change', function() {
            const label = document.querySelector(`label[for="${seat.id}"]`);
            label.style.backgroundColor = "green"
            
            if (seat.checked) {
                label.style.backgroundColor = "green"
                fullprice = fullprice + price
                buy_button.innerHTML = "К оплате " + fullprice + "р."
                console.log(fullprice)
            } else {
                label.style.backgroundColor = "red"
                fullprice -= price
                buy_button.innerHTML = "К оплате " + fullprice + "р."
            }
            if(fullprice == 0){
                buy_button.innerHTML = "Купить билеты"
            }
          });
      });
}catch(error){
}