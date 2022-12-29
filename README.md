# PHP
Ejercicios de PHP


<?php
include("persona.php");

class Profesor extends Persona
{
    public string $curso;
    function __construct($nombre, $apellidos, $edad, $curso)
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->curso = $curso;
    }
    
}

/*Probando/*
