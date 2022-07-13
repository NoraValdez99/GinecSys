<?php
/*$server = "localhost";
$bd = "expediente";
$user = "root";
$pass = "";
*/
$server = "localhost";
$bd = "expediente18";
$user = "root";
$pass = "1234noraadriana";


// Create connection
$conexion = mysqli_connect($server, $user, $pass, $bd);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conexion);
?>