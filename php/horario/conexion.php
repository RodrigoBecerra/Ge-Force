<?php
$host = "127.0.0.1";
$usuario = "root";
$pass = "";

$conexion = mysqli_connect($host, $usuario, $pass)
                OR die('No pudo conectarse: ' . mysqli_error($conexion));

class DB { 
    private static $server  = '127.0.0.1';
    private static $user  = 'root'; 
    private static $password   = '';
    private static $db   = 'horarios';
    private static $con = NULL;


    public static function open(){
        DB::$con = mysqli_connect(DB::$server, DB::$user, DB::$password,DB::$db); 
        return DB::$con;        
    }

    public static function pQRY($qry){
        return mysqli_query(DB::$con,$qry);
    }

    public static function cuenta(){
        $c = DB::pQRY("SELECT COUNT(id_As) AS cu FROM `horario`")
            or die("No se encontro");
        return $c;
    }

    public static function gethorario(){
        $consulta_resultados = DB::pQRY("SELECT * FROM `horario` ORDER BY `id_Horario`")
            or die("No se encontro");
        return $consulta_resultados;
    }

    public static function celu(){
    	$celuask = DB::pQRY("SELECT * FROM horario, asignatura WHERE horario.Id_As=asignatura.Id_As;")
    		or die("no se encontro");
    	return $celuask;
    }

    public static function close(){
        DB::$con->close();
    }
}