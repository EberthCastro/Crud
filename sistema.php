<?php

require_once("Autoload.php");


$pdo = new PDO('mysql:host=localhost;dbname=recipesdb', 'root', '');
$objUsuario = new Comida($pdo);


    // $insert = $objUsuario->insertarComida("Lomito Saltado","Peru","delicioso", 2000);
    // echo $insert;


//extrae todos los resgistros

$users= $objUsuario->obtenerComidas();
//Imorime todos los registros
print_r ("<pre>");
print_r ($users);
print_r ("</pre>");


//Elimina los registros
$delete = $objUsuario->eliminarComida(42);

?>
