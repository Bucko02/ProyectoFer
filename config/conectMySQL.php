<?php
// config/conectMySQL.php
class conectMySQL {
    private $host = "localhost";
    private $db_name = "ventas";
    private $username = "root";
    private $password = ""; 
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // Configurar para que maneje caracteres especiales (acentos, ñ)
            $this->conn->exec("set names utf8");
            // Activar el manejo de excepciones/errores
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>