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

    
?>

<?php
    $conexion = new mysqli('127.0.0.1', 'baudilio', '123456', 'incidencias');
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/incidenciasadmin.css?v=<?php echo time(); ?>">
    <title>Panel de incidencias</title>
</head>
<body>


<!-- Tabla mejorada -->

<h2>Incidencias</h2>


<div class="table-wrapper">
<div class="imagenindex">
<a href="#"><img style=" margin-bottom: 10px; width: 100px; heigth: 100px;" src="image/logo.png" alt=""></a>

    <table class="fl-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Persona</th>
            <th>Mantenimiento</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Teléfono</th>
            <th>Incidencia</th>
            <th>Mensaje</th>
        </tr>
        </thead>
        <tbody>

        <?php
$sql="SELECT * FROM `pruebas` WHERE 1";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

        <tr>
        <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['persona']?></td>
            <td><?php echo $mostrar['mantenimiento']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['telefono']?></td>
            <td><?php echo $mostrar['incidencia']?></td>
            <td class="mensaje"><?php echo $mostrar['mensaje']?></td>
        </tr>
        <?php
}
?>

        
        <tbody>

        
                
            </div>
            <div class="desconectar">
                <a href="logout.php">Desconectar</a>
            </div>
            <div class="panelboton">
    <a href="index.php">Inicio</a>
</div>
    </table>

    
    
    <!-- <div class="desconectar">
        
    </div> -->

</div>

    
</body>
</html>