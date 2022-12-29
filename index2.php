<?php
include("Profesor.php");

$profesor=new Profesor("Luis","Perez",45,"programacion");
$profesor2=new Profesor("Maria","Perez",45,"programacion");
$person=new Persona("Lucia","Gonzalez",23);
var_dump($profesor->apellidos);
echo "<br>";
var_dump(Persona::$contador);
echo "<br>";
var_dump($person);
echo "<br>";
var_dump(Persona::getContador());
?>