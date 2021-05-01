
let particular = document.getElementById("particular");
let empresa = document.getElementById("empresa");




function prueba() {

event.preventDefault();
    if(empresa.checked) {
        alert('Has seleccionado Empresa');
    } else if(particular.checked) {
        alert('Has seleccionado Particular');
    } else {
        alert('Debes elegir una opción antes de continuar');
    }

}
