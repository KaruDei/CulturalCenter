try{
    let con = document.getElementById("con");
    let o = 1;
        for (let i = 0; i < 10; i++) {
            const br = document.createElement('br')
            con.appendChild(br);
            for(let j = 0; j < 10; j++){
                const checkbox = document.createElement('input');
                const label = document.createElement('label')
                checkbox.type = 'checkbox';
                checkbox.id = `checkbox-${o}`;
                checkbox.className = "checkbox-theatre"
                label.textContent = o;
                label.className = "label-theatre"
        
                con.appendChild(checkbox);
                con.appendChild(label)

                o++
        }}
}catch(error){
    console.log(error)
}