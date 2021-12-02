
let elem_nome = document.getElementById("input_name");
let elem_matricula = document.getElementById("input_matricula");
let elem_nota1 = document.getElementById("input_nota1");
let elem_nota2 = document.getElementById("input_nota2");
let btnClicar = document.getElementById("btnClicar");


btnClicar.addEventListener("click", function(event){

    if(elem_nome.value == ""){
        event.preventDefault();
        alert("Informe seu nome");
        return;
    }
    if(elem_matricula.value == ""){
        event.preventDefault();
        alert("Informe sua matricula");
        return;
    }
    if(elem_nota1.value == ""){
        event.preventDefault();
        alert("Infomre sua primeira nota");
        return;
    }
    if(elem_nota2.value == ""){
        event.preventDefault();
        alert("Informe sua sua segunda nota");
        return;
    }
})
