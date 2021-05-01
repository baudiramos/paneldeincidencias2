
<?php
    include("db/config.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    
    <form action="" method="get">
    <input type="text" name="busqueda"> <br>
    <input type="submit" name="enviar" value="Buscar"> <br>
    </form>

    <br><br><br>

    <?php
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $link->query("SELECT * FROM pruebas WHERE mensaje LIKE '%$busqueda'");

        while ($row = $consulta->fetch_array()) {
            echo $row['mensaje'].'<br>';
        }
    }
    ?>

</body>
</html>