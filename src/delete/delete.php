<?php

class delete extends Conexion 
{
    // Método para eliminar un elemento por ID
    public function Delete(int $id)
    {
        // Sentencia SQL con parámetro named placeholder
        $sql = "DELETE FROM comida WHERE id = :id";
        // Prepara la sentencia
        $del = $this->pdo->prepare($sql);
        // Enlaza el parámetro con su valor
        $del->bindParam(':id', $id, PDO::PARAM_INT);
        // Ejecuta la sentencia
        $delete = $del->execute();
        // Devuelve el resultado de la ejecución
        return $delete;
    }
}

?>