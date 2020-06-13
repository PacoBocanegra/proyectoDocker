<?php

require_once 'PruebaDB.php';

class Usuario {

  private $dni;
  private $nombre;
  private $apellidos;
  private $email;
  private $password;
  private $admin;

  function __construct($dni, $nombre, $apellidos, $email, $password) {
    $this->dni = $dni;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->email = $email;
    $this->password = $password;
  }

  public function getDNI() {
    return $this->dni;
  }

  public function getName() {
    return $this->nombre;
  }

  public function getLastName() {
    return $this->apellidos;
  }

  public function getPwd() {
    return $this->password;
  }

  public function addPwd($password) {
    $this->password = $password;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getAdmin() {
    return $this->admin;
  }

  public function addAdmin() {
    $this->admin = "X";
  } 

  //Devuelve todos los usuarios
  public static function getUsuarios() {
    $conexion = PruebaDB::connectDB();
    $seleccion = "SELECT DNI, Nombre, Apellidos, Email, Password, Admin FROM USUARIO";
    $consulta = $conexion->query($seleccion);
    $usuarios = [];
    while ($registro = $consulta->fetchObject()) {
      $usuario = new Usuario($registro->DNI, $registro->Nombre, $registro->Apellidos, $registro->Email, $registro->Password, $registro->Admin);
      if($registro->Admin) {
        $usuario->addAdmin();
      }
      $usuarios []= $usuario; 
    }
    return $usuarios;    
  }
}