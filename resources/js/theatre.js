
    let form = document.querySelector(".form-theatre");
    let labelForm = document.querySelector('.label-theatre')
    let checkboxCount = 1;
    let labelCount = 0;

    for(let i = 0;i<10;i++){
        let label = document.createElement('label');
        label.textContent = labelCount
        labelForm.appendChild(label);
    }
        for (let i = 0; i < 10; i++) {
            labelCount ++
            for(let j = 0; j < 10; j++){
                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.id = `checkbox-${checkboxCount}`;
                checkbox.className = "checkbox-theatre"
                form.appendChild(checkbox);

                checkboxCount++
        }}
