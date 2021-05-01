<?php



// Lo que esta entre comillas es el atributo name de la etiqueta input del formulario.

include("con_db.php");
if (isset($_POST['enviar'])) {
    $persona = trim($_POST['persona']);
    $mantenimiento = trim($_POST['confirmacion']);
    $name = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $incidencia = trim($_POST['radio']);
    $mensaje = trim($_POST['mensaje']);
    
    $consulta = "INSERT INTO pruebas (persona, mantenimiento, nombre, email, telefono, incidencia, mensaje) VALUES ('$persona','$mantenimiento','$name','$email','$telefono','$incidencia','$mensaje')";

    
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        ?>
        <h3>Te has registrado correctamente</h3>
        <?php
    } else {
        ?>
        <h3>A ocurrido un error</h3>
        <?php
    } 
} 

  
?>








