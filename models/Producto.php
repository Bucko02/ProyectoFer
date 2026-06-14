<?php
// models/Producto.php
class Producto {
    private $conn;
    private $table_name = "productos";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para obtener solo los productos visibles para los compradores
    public function obtenerDisponibles() {
        $query = "SELECT id_producto, nombre, descripcion, precio, imagen, estado FROM " . $this->table_name . " WHERE estado = 'disponible' ORDER BY created_at DESC";
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        // Retornamos todos los registros como un arreglo asociativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>