<?php

require_once("./src/read/script.js");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recetas";
$tableName = "recetas";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare('SELECT * FROM ' . $tableName); //'SELECT * FROM ' . $tablename . ' WHERE `id` = ' . $id 
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $data = $stmt->fetchAll();
  echo '<div class="container">';
  echo '<div class="row">';
  foreach ($data as $row) {
    echo
    
    '<div class="card" style="width: 18rem;">
        <img src="' . $row["picture"] . '" class="card-img-top" alt="' . $row["nombre"] . '">
      <div class="card-body">
        <h5 class="card-title">' . $row["nombre"] . '</h5>
        <p class="card-text">' . $row["tipo_de_dieta"] . '</p>
        <p class="card-text">' . $row["pais_de_origen"] . '</p>
        <p class="card-text">' . $row["contenido_calorico"] . '</p>
      </div>
      
      <a href="index.php?var1='.$row["id"].'"><button class="btn btn-primary mb-2." name="imprimir" value="'.imprimir($row["id"]).'">Edit</button></a>
      echo 
      <button class="btn btn-danger">Delete</button>
    </div>';
  }
  echo '</row>';
  echo '</div>';
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

 function imprimir($value){
      return $value;
 }
 
 
$conn = null;
?>