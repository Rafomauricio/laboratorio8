<?php 
$contrasena = "AVNS_kKSkflCp2xGgajXHnqB";
$usuario = "doadmin";
$nombre_bd = "veterinaria";
$host = "db-mysql-nyc1-28475-do-user-14089120-0.b.db.ondigitalocean.com";
$port = 25060;

try {
	$bd = new PDO (
		'mysql:host=' .$host. 
		';port='; 
		'dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} 
catch (Exception $e) {
	
	echo "Problema con la conexion: ".$e->getMessage();
}
?>
