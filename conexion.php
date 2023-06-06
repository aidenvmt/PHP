<?php
$conn=mysqli_connect("localhost:3306","root","","test");
//servidor, user, pass, db
//var_dump($conn);
//print_r($conn);
//echo("conn"); //parsing to String
if($conn){
    echo("<p>Conexión realizada con éxito</p>");
}
else{
    echo("<p>Algo va mal</p>");
}

$resultado=$conn->query("select * from clientes");
//var_dump($resultado);

echo("<table class='table'>");
echo("<thead><tr><td>Nombre</td><td>Ciudad</td><td>Presupuesto</td></tr></thead>");

while ($row = $resultado->fetch_assoc()) {
   /* echo("<p>".$row["id"]."</p>");
    echo("<p>".$row["nombre"]."</p>");
    echo("<p>".$row["ciudad"]."</p>");
    echo("<p>".$row["presupuesto"]."</p>");
    echo("<hr>");*/
   // printf ("%s (%s)\n",$row["nombre"], $row["ciudad"]);
echo("<tr class='table-success'>");
echo("<td>".$row['nombre']."</td>");
echo("<td>".$row['ciudad']."</td>");
echo("<td>".$row['presupuesto']."</td>");
echo("</tr>");
}//cierra bucle

echo("</table>");


$connPDO=new PDO("mysql:host=localhost:3306;dbname=test","root","");
var_dump($connPDO);


$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];

echo ("<p>" . $nombre . "</p>");
echo ("<p>" . $apellidos . "</p>");