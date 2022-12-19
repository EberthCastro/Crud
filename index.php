<!doctype html>
<html lang="en">
<?php 
include("./src/update/update.php");
require_once("./Conexion.php");

if(isset($_POST['update']))
{
    $connection = new Conexion();
    $db = $connection->connect();
    $name = $_POST['nombre'];
    $origen = $_POST['origen'];
    $tipo = $_POST['tipo'];
    $calorias = $_POST['calorias'];
    $imagen = $_POST['img'];
    $update = new Update();
    $updateFunction = $update->update($name, $origen, $tipo, $calorias, $imagen);
    $result = $db->query($updateFunction);
    // $result = mysqli_query($connection, $updateFunction);
}



?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <h1>Editar</h1>
  

    <form method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">

        </div>
        <div class="mb-3">
            <label for="origen" class="form-label">Origen</label>
            <input type="text" class="form-control" name="origen" id="origen">

        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="tipo">
        </div>
        <div class="mb-3">
            <label for="calorias" class="form-label">Calorias</label>
            <input type="text" class="form-control" name="calorias" id="calorias">

        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Img</label>
            <input class="form-control" type="file" name="img" id="img">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>

    <section>Read</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <table class="table">

  
</table>
    
</body>

</html>