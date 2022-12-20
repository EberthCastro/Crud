<?php

require_once("Autoload.php");


$pdo = new PDO('mysql:host=localhost;dbname=recetas', 'root', '');
$objUsuario = new Comida($pdo);


    $insert = $objUsuario->insertarComida("Lomito Saltado","Peru","delicioso", 2000);
    echo $insert;


//extrae todos los resgistros

$users= $objUsuario->obtenerComidas();
//Funciona
print_r ("<pre>");
print_r ($users);
print_r ("</pre>");

//actualiza el campo con el id asignado ...(id,nombre,lanzamiento,desarrollador)
// $updateUser = $objUsuario->updateUser(2,"Caldo de pollo","Peru","delicioso", 2000);
// echo $updateUser;

//Funciona
// echo "<br>";
// var_dump($users);

//Funciona

$delete = $objUsuario->eliminarComida(24);

?>
