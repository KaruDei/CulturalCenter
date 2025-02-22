try{
    let form = document.querySelector(".form-theatre");
    let labelForm = document.querySelector('.label-theatre')
    let checkboxCount = 1;

        for (let i = 1; i <= 10; i++) {
            // let label = document.createElement('label');
            // label.textContent = labelCount
            // labelForm.appendChild(label);
            let label = document.createElement ('label')
            label.textContent = i +"ряд"
            form.appendChild(label);
            for(let j = 1; j <= 10; j++){
                const img = document.createElement('img');
                img.src = "/icons/armchair.png"
                img.alt = 'Описание изображения'; // Добавьте описание для доступности
                img.style.width = '100%'; // Установите ширину изображения (при необходимости)
                img.style.height = '100%'; // Установите высоту изображения (при необходимости)
                img.style.marginTop = "-55%" // Добавляем отступ справа от изображения
                const checkbox = document.createElement('input');
                let labelforcheckbox = document.createElement ('label')
                labelforcheckbox.textContent = checkboxCount
                labelforcheckbox.setAttribute('for', 'checkbox-' + checkboxCount)
                labelforcheckbox.id = `label-${checkboxCount}`
                labelforcheckbox.className = "labelforcheckbox"
                form.appendChild(labelforcheckbox);
                checkbox.type = 'checkbox';
                checkbox.id = `checkbox-${checkboxCount}`;
                checkbox.className = "checkbox-theatre"
                form.appendChild(checkbox);
                labelforcheckbox.appendChild(img)

                checkboxCount++
        }}
        
        let labelContainer = []

        for(let i=1; i <= checkboxCount;i++){
            let labelforcheckbox = document.getElementById(`label-${i}`);
            labelContainer.push(labelforcheckbox)
        }

        labelContainer.forEach(label => {
            label.onclick = function () {
                // Проверяем текущий цвет фона и переключаем его
                if (label.style.backgroundColor === "green") {
                    label.style.backgroundColor = "red"; // Меняем на красный
                } else {
                    label.style.backgroundColor = "green"; // Меняем на зеленый
                }
            };
        });
}catch(error){

}        
