<?php
require_once 'Persona.php';
require_once 'Empleado.php';

echo "<h1>PROGRAMACION ORIENTADA A OBJETOS</h1>";
echo "<h2>Instancia de una Persona</h2>";

$persona = new Persona('Ana', 25, 'Femenino');

//acceder a metodos de esa persona
echo "Nombre: ", $persona->getNombre(), ", Edad: ", $persona->getEdad(), ", Genero: ", $persona->getGenero();

echo "<h2>Instancia Empleado</h2>";

$empleado = new Empleado("Fabian", 24, "Masculino", "E001", 5000000);
echo "Numero ", $empleado->getNumeroEmpleado();