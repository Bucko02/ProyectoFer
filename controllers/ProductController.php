<?php
// controllers/ProductController.php
include_once __DIR__ . '/../config/conectMySQL.php';
include_once __DIR__ . '/../models/Producto.php';

class ProductController {
    
    public function mostrarCatalogoPublico() {
        // 1. Instanciar la base de datos y conectar
        $database = new conectMySQL();
        $db = $database->getConnection();
        
        // 2. Instanciar el modelo Producto
        $productoModel = new Producto($db);
        
        // 3. Obtener los productos desde MySQL
        $productos = $productoModel->obtenerDisponibles();
        
        // 4. Retornamos la lista de productos a quien la solicitó (la vista)
        return $productos;
    }
}
?>