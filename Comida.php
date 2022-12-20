<?php
 
class Comida
{
    protected $nombreComida;
    protected $origenComida;
    protected $tipoComida;
    protected $caloriasComida;
    
    protected $conexion;

    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }

   
    public function insertarComida(string $nombreComida, string $origenComida, string $tipoComida, int $caloriasComida): int
    {
        // Validar los datos de entrada
        if (empty($nombreComida) || empty($origenComida) || empty($tipoComida) || !is_int($caloriasComida)) {
            return 0;
        }

        $sql = "INSERT INTO comida(Nombre,Origen,Tipo,calorias) VALUES (?,?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($nombreComida, $origenComida, $tipoComida, $caloriasComida);
        $resInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId($resInsert);

        // Verificar si hubo un error al insertar
        if ($resInsert === false) {
            return 0;
        }
        
        return $idInsert;
    }

   
    public function obtenerComidas(): array
    {
        $sql = "SELECT * FROM comida";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

   
    public function actualizarComida(int $id, string $nombreComida, string $origenComida, string $tipoComida, int $caloriasComida): bool
    {
        // Validar los datos de entrada
        if (empty($nombreComida) || empty($origenComida) || empty($tipoComida) || !is_int($caloriasComida)) {
            return false;
        }

        // Utilizar sentencia preparada para proteger contra ataques de inyección SQL
        $sql = "UPDATE comida SET Nombre=?, Origen=?, Tipo=?, Calorias=? WHERE id=?";
        $update = $this->conexion->prepare($sql);
        $arrData = array($nombreComida, $origenComida, $tipoComida, $caloriasComida, $id);
        $resExecute = $update->execute($arrData);

        return $resExecute;
    }

   
    public function obtenerComida(int $id): array
    {
        // Utilizar sentencia preparada para proteger contra ataques de inyección SQL
        $sql = "SELECT * FROM comida WHERE id = ?";
        $arrWhere = array($id);
        $query = $this->conexion->prepare($sql);
        $query->execute($arrWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);

        // Si no se obtuvo ninguna fila, devolver un arreglo vacío
        if ($request === false) {
            return array();
        }

        return $request;
    }

   
    public function eliminarComida(int $id): bool
    {
        // Utilizar sentencia preparada para proteger contra ataques de inyección SQL
        $sql = "DELETE FROM comida WHERE id = ?";
        $arrWhere = array($id);
        $del = $this->conexion->prepare($sql);
        $delete = $del->execute($arrWhere);

        return $delete;
    }
}




?>
