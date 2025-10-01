<?php

//paquetes que se necesitan: mysqlite --> solo sirve para bases de datos locales
//                           pdo --> sirve para bases de datos en linea

//pdo evita codigo malicioso 
//mysqli es mas rapido pero menos seguro y pdo es mas seguro pero mas lento

class Database{

    //datos del sever
    private $host = "db";
    private $db_name = "db_estudiantes";
    private $username = "root";
    private $password = "rootpass";
    public $conn; //variable que almacena instancia de objeto de la conexion

    //funcion que retorna la conexion a la base de datos
    public function getConnection(){

        $this->conn = null;

        try {

            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8"); //para recibir caracteres especiales

            //define todos los tipos de errores
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado";
        } 
        
        catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

$db = new Database();
$conn = $db->getConnection();

$stmt = $conn->prepare("INSERT INTO estudiantes (id_persona, nombre, direccion, edad) VALUES (?, :nombre, :direccion, :edad)");

class Persona{
    public $nombre;
    public $direccion;
    public $edad;
}

$nombre = "Juan";
$direccion = "San Salvador";
$edad = 45;

//$stmt->bindParam(":nombre", $nombre);
//$stmt->bindParam(":direccion", $direccion);
//$stmt->bindParam(":edad", $edad);

$data = array(":nombre" => $nombre, ":direccion" => $direccion, ":edad" => $edad);

//por medio de objetos
//el nombre de los atributos debe coincidir con los nombres de las columnas de la base de datos


$stmt->execute($data);

//$stmt->prepare("SELECT * FROM tbl_estudiantes");
//

?>