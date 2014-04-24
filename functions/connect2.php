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

abstract class DBAbstractModel {
// Propiedades
private static $db_host = 'localhost';
private static $db_user = 'root';
private static $db_pass = '';
protected $db_name = 'portal_web';
protected $query;
protected $rows = array();
private $conn;
    # métodos abstractos para ABM de clases que hereden
    abstract protected function get();
    abstract protected function set();
    abstract protected function edit();
    abstract protected function delete();
    # los siguientes métodos pueden definirse con exactitud
    # y no son abstractos
    # Conectar a la base de datos
    private function open_connection() {
    $this->conn = new mysqli(self::$db_host, self::$db_user,self::$db_pass, $this->db_name);
    }

    # Desconectar la base de datos
    private function close_connection() {
    $this->conn->close();
    }
    # Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
    protected function execute_single_query() {
    $this->open_connection();
    $this->conn->query($this->query);
    $this->close_connection();
    }
    # Traer resultados de una consulta en un Array
    protected function get_results_from_query() {
    $this->open_connection();
    $result = $this->conn->query($this->query);
    while ($this->rows[] = $result->fetch_assoc());
    $result->close();
    $this->close_connection();
    
    array_pop($this->rows);
    }
}

class Usuario extends DBAbstractModel {
public $nombre;
public $apellido;
public $email;
private $clave;
protected $id;
    
    function __construct() {
    $this->db_name = 'usuario';
    }
    
    public function get($user_email='') {
    if($user_email != ''):
    $this->query = "
    SELECT id, nombre, apellido, email, clave
    FROM usuario
    WHERE email = '$user_email'
    ";
    $this->get_results_from_query();
    endif;
    if(count($this->rows) == 1):
    foreach ($this->rows[0] as $propiedad=>$valor):
    $this->$propiedad = $valor;
    endforeach;
    endif;
    }
    
    public function set($user_data=array()) {
    if(array_key_exists('email', $user_data)):
    $this->get($user_data['email']);
    if($user_data['email'] != $this->email):
    foreach ($user_data as $campo=>$valor):
    $$campo = $valor;
    endforeach;
    $this->query = "
    INSERT INTO usuario
    (nombre, apellido, email, clave)
    VALUES
    ('$nombre', '$apellido', '$email', '$clave')
    ";
    $this->execute_single_query();
    endif;
    endif;
    }
    
    public function edit($user_data=array()) {
    foreach ($user_data as $campo=>$valor):
    $$campo = $valor;
    endforeach;
    $this->query = "
    UPDATE usuario
    SET nombre='$nombre',
    apellido='$apellido',
    clave='$clave'
    WHERE email = '$email'
    ";
    $this->execute_single_query();
    }
    
    public function delete($user_email='') {
    $this->query = "
    DELETE FROM usuario
    WHERE email = '$user_email'
    ";
    $this->execute_single_query();
    }
    function __destruct() {
    unset($this);
    }
} // Fin de la Clase Usuario

// EXAMPLE

# Traer los datos de un usuario
$usuario1 = new Usuario();
//$usuario1->get('dilarreta@inhrr.gob.ve');
$usuario1->get('dilarreta@inhrr.gob.ve');
print $usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';
/*
# Crear un nuevo usuario
$new_user_data = array(
'nombre'=>'Alberto',
'apellido'=>'Jacinto',
'email'=>'albert2000@mail.com',
'clave'=>'jacaranda'
);
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['email']);
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';
# Editar los datos de un usuario existente
$edit_user_data = array(
'nombre'=>'Gabriel',
'apellido'=>'Lopez',
'email'=>'dilarreta@inhrr.gob.ve',
'clave'=>'69274'
);
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['email']);
print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';
# Eliminar un usuario
$usuario4 = new Usuario();
$usuario4->get('albert2000@mail.com');
$usuario4->delete('albert2000@mail.com');
print $usuario4->nombre . ' ' . $usuario4->apellido . ' ha sido eliminado';
*/

?>