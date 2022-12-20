<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipesdb";
$tableName = "recetas";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare('SELECT * FROM ' . $tableName);
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
      <button class="btn btn-primary">Edit</button>
    </div>';
  }
  echo '</row>';
  echo '</div>';
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;