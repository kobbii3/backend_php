<?php
require_once 'Persona.php';

class Empleado extends Persona{
     private $numeroEmpleado;
     private $salario;

     public function __construct($nombre, $edad, $genero, $numeroEmpleado, $salario)
     {
        parent::__construct($nombre, $edad, $genero);
        $this->numeroEmpleado = $numeroEmpleado;
        $this->salario = $salario;
     }

     public function getNumeroEmpleado()
     {
          return $this->numeroEmpleado;
     }
     public function setNumeroEmpleado($numeroEmpleado)
     {
          $this->numeroEmpleado = $numeroEmpleado;

          return $this;
     }


     public function getSalario()
     {
          return $this->salario;
     }
     public function setSalario($salario)
     {
          $this->salario = $salario;

          return $this;
     }
}