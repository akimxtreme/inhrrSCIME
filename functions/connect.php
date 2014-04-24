<?php
/*
Comprobando la Conexión
*/
/*
$usuario = "postgres"; // Coloca el Nombre de Usuario de PostgreSQL
$password = "17588630"; // Coloca el password de PostgreSQL
$db = "scime"; // Coloca en Nombre de la Base de Datos 
$port = 5432; // Puerto
$host = "localhost";  // Coloca la ruta del host, si es local escribe locahost ó 127.0.0.1
$attrib = "host=$host port=$port dbname=$db user=$user password=$passwd"; // Junta lo parámetros vaciados en las variables anteriores
$connect = pg_connect($attrib) or die ("Error de conexion. ". pg_last_error()); // Compueba la conexión
*/
class Database extends PDO
{
 
    //nombre base de datos
    private static $dbname = "prueba";
    //nombre servidor
    private static $host = "localhost";
    //nombre usuarios base de datos
    private static $user = "postgres";
    //password usuario
    private static $pass = 17588630;
    //puerto postgreSql
    private static $port = 5432;
    private $dbh;
 
    //creamos la conexión a la base de datos prueba
    public function __construct() 
    {
        try {
 
            $this->dbh = parent::__construct("pgsql:host=self::$host;port=self::$port;dbname=self::$dbname;user=self::$user;password=self::$pass");
 
        } catch(PDOException $e) {
 
            echo  $e->getMessage(); 
 
        }
 
    }
 
    //función para cerrar una conexión pdo
    public function close_con() 
    {
 
        $this->dbh = null; 
 
    }
 
}

class Users
{
 
    private $con;
    public function __construct()
    {
        
        //en $this->con tenemos la conexión con la bd pruebas
        $this->con = new Database();
 
    }
    
    //creamos una tabla con postgreSql
    public function create_table_users()
    {
        
        try{
            //SERIAL equivale a auto_increment en mysql
            $query = $this->con->prepare('CREATE TABLE IF NOT EXISTS users(
                                            id SERIAL,
                                            nombre varchar(100),
                                            apellidos varchar(100),
                                            fecha_registro date,
                                            primary key(id)
                                         );');
            
            $query->execute();
            //cerramos la conexión con la bd
            $this->con->close_con();
        
        } catch(PDOException $e) {
 
            echo  $e->getMessage(); 
 
        }
    }
    
    //insertamos usuarios en una tabla con postgreSql
    public function inserta_usuarios($nombre,$apellidos,$fecha_registro)
    {
        
        try{
            
            $query = $this->con->prepare('INSERT INTO users (nombre,apellidos,fecha_registro) values ("Domingo","Ilarreta","0000-00-00")');
            $query->bindParam(1,$nombre);
            $query->bindParam(2,$apellidos);
            $query->bindParam(3,$fecha_registro);
            $query->execute();
            $this->con->close_con();
        
        } catch(PDOException $e) {
 
            echo  $e->getMessage(); 
 
        }
    }
    
    //obtenemos usuarios de una tabla con postgreSql
    public function getUsers()
    {
 
        try{
            
            $query = $this->con->prepare('SELECT id,nombre,apellidos,fecha_registro FROM users');
            $query->execute();
            $this->con->close_con();
            return $query->fetchAll();
        
        } catch(PDOException $e) {
 
            echo  $e->getMessage(); 
 
        }
 
    }
 
}
?>