<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost'); // Servidor de base de datos
define('DB_USERNAME', 'root'); // Usuario de la base de la base de datos
define('DB_PASSWORD', '');  // Contraseña de la base de datos
define('DB_NAME', 'incidencias'); // Nombre de la base de datos
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>
