<?php include 'sendemail.php'; ?>

<?php
        include("db/config.php");
        ?>




<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>


<!-- Pues descomentar esta opción para comprobar la conexión de la base de datos -->

  <!-- <?php

  if ($link) {
    echo "Te has conectado correctamente a la base de datos";
  }

  ?> -->

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->


    <div class="container">
    <div class="contact-form">
        <h2 class="titulo">Formulario de soporte</h2>
        <form class="contact" action="" method="post">

        <!-- Contenedor tipo de persona -->
        <div class="persona">
          <label for="empresa">Empresa</label>
          <input name="persona" id="empresa" type="radio" value="Empresa">
          <label for="particular">Particular</label>
          <input name="persona" id="particular" type="radio" value="Particular">

    <!-- Contenedor Mantenimiento -->
         
          <div id="mantenimiento">
          <p class="mantenimiento">Mantenimiento: </p>
          <div class="comprobaciones">
          <label for="si">Sí</label>
            <input name="confirmacion" id="si" type="radio" value="Sí">
            <div class="noo">
            <label class="no" for="no">No</label>
            <input name="confirmacion" id="no" type="radio" value="No">
            </div>
            
          </div>
            
          </div>
          
        </div>

       


          
          <br><br>


         
          <label for=""></label>
          <input type="text" name="nombre" class="text-box" placeholder="Nombre" > <br> 
          <div class="pruebaa">
          <span><p><span class="estrella">*</span><span class="correoobligatorio">(Campo obligatorio)</span></p></span> 
          </div>
          
          <input type="email" name="email" class="text-box" placeholder="E-mail"> <br> 
          <div class="pruebaa">
          <span><p><span class="estrella">*</span><span class="correoobligatorio">(Campo obligatorio)</span></p></span> 
          </div>
          <input value="+34" type="tel" name="telefono" class="text-box" placeholder="Teléfono">
          <div id="tipoincidencia" class="tipoincidencia">
          <h3>Tipo de incidencia:</h3> <br>
          <div class="tipoincidenciaa">
          <label for="pc">PC</label>
          <input name="radio" id="pc" type="radio" value="PC">
          <label for="mac">MAC</label>
          <input name="radio" id="mac" type="radio" value="MAC">
          <label for="otro">OTRO</label>
          <input name="radio" id="otro" type="radio" value="OTRO">
          </div>
          
          </div>
          <textarea name="mensaje" rows="5" placeholder="Mensaje"></textarea>
          <input type="submit" name="enviar" class="send-btn" value="Enviar">
        </form>
        <?php
        include("db/datos.php");
        ?>
      </div>
    </div>
</div>




    
      
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }

    
    </script>

    <script src="js/app.js"></script>

  </body>
</html>