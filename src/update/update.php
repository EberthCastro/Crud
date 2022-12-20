<?php 

// $svName = 'localhost';
// $username = 'messi';
// $password = 'argentina';
// $db = "recetas";
class Update {
  
  public function update($name, $origen, $tipo, $calorias, $imagen)
  {
    return $update = "UPDATE `receta` SET `Nombre del plato`='$name',`Origen plato`='$origen',`Tipo`='$tipo',`Calorías`='$calorias',`Imagen`='$imagen' WHERE `Nombre del plato`='$name'";
  }
}
?>