<?php
include("Persona.php");

class Profesor extends Persona{
    public string $curso;

    function __construct($nombre,$apellidos,$edad,$curso)
    {
        parent::__construct($nombre,$apellidos,$edad);
        $this->curso=$curso;
    }
    public function getNombre(){
        return $this->nombre;
    }

}

?>