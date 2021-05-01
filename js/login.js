document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });

  function validarFormulario(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('name').value;
    var clave = document.getElementById('password').value;

    // if (usuario === "" || clave === "") {
    //     alert('Debes introducir datos en los campos');
    // } 
    
    if(usuario.length === 0) {
        alert('No has escrito nada en el usuario');
        return;
      } 
      
      if (clave.length < 5) {
        alert('La clave no es válida');
        
      }
    
    
     
    
     
    
    this.submit();
  }