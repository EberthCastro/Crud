<?php 

// $svName = 'localhost';
// $username = 'messi';
// $password = 'argentina';
// $db = "recetas";
class Update {
  
  public function update($name, $origen, $tipo, $calorias, $id, $imagen)
  {
    return $update = "UPDATE `recetas` SET `nombre`='$name',`pais_de_origen`='$origen',`tipo_de_dieta`='$tipo',`contenido_calorico`='$calorias',`id`='$id',`picture`='$imagen' WHERE `id` = $id";
  }

}
?>