<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION["loggedin"])){
        $cliente = $_SESSION["loggedin"];
    }else{
 header('Location: login.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }

    $username = $cliente
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panel principal</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css\styleii.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="general">
    <div class="usuario">
    <p>Bienvenido <?php echo $_SESSION['username']; ?></p>
    
    </div>
    <div class="texto">
        <p>Puedes acceder al panel de incidencias desde el panel del lateral izquierdo o haciendo clic en este botón.</p>
    </div>
    <div class="incidencia">

    <form action="adminincidencias.php">
    <input type="submit" value="Incidencias" />
    
</form>
        
    </div>
    </div>

    
    <div class="sidebar">
        <div class="logo">
            <a href="#">
                
            </a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>Desconectar</p>
                    </a>
                </li>
                <li>
                    <a href="adminincidencias.php">
                        <i class="fas fa-question-circle"></i>
                        <p>Incidencias</p>
                    </a>
                </li>               
                <li>
                    <a href="password.php">
                        <i class="fas fa-question-circle"></i>
                        <p>Cambiar contraseña</p>
                    </a>
                </li>               
                    </a>
                </li>
            </ul>
            <div class="imagenlogo">
                <a href="#"><img style="margin: 180px 45px; height: 100px; width:100px;" src="image/logo.png" alt=""></a>
                
            </div>
        </nav>
       
    </div>
</body>
</html>