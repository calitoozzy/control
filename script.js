

let listado = ["escuadra magnetica", "tijera hojalata", "alargue taller (8)" ]

let listadoRef = document.getElementById("listado");

listado.forEach((item, index) =>{

    let divContainer = document.createElement("div");
    let inputContainer = document.createElement("input");
    let labelContainer = document.createElement("label");

    labelContainer.setAttribute("for","flexCheckDefault"+index);
    labelContainer.setAttribute("class","form-check-label");
    labelContainer.textContent = item

    inputContainer.setAttribute("class","form-check-input");
    inputContainer.setAttribute("id","flexCheckDefault"+index);
    inputContainer.type = "checkbox";

    divContainer.appendChild(inputContainer);
    divContainer.appendChild(labelContainer);


    listadoRef.appendChild(divContainer);
})