<?php
$host = "localhost";
$usuario = "id3622290_horarios";
$pass = "nico.2012";

$conexion = mysqli_connect($host, $usuario, $pass)
                OR die('No pudo conectarse: ' . mysqli_error($conexion));

class DB { 
    private static $server  = 'localhost';
    private static $user  = 'id3622290_horarios'; 
    private static $password   = 'nico.2012';
    private static $db   = 'id3622290_horarios';
    private static $con = NULL;


    public static function open(){
        DB::$con = mysqli_connect(DB::$server, DB::$user, DB::$password,DB::$db); 
        return DB::$con;        
    }

    public static function pQRY($qry){
        return mysqli_query(DB::$con,$qry);
    }

    public static function cuenta(){
        $c = DB::pQRY("SELECT COUNT(id_PL) AS cu FROM `horario`")
            or die("No se encontro");
        return $c;
    }

    public static function gethorario(){
        $consulta_resultados = DB::pQRY("SELECT * FROM `horario` ORDER BY `id_Horario`")
            or die("No se encontro");
        return $consulta_resultados;
    }

    public static function close(){
        DB::$con->close();
    }
}