<?php
class Alumno{
    //propiedad
    private  string $nombre;
    public  int $edad;

    //constructor de la clase
    function __construct($nombre,$edad){
        $this->nombre="Nombre: $nombre";
        $this->edad=$edad;
    }

    //método
    private function infoAlumno(){
        return "EL nombre es: $this->nombre , edad: $this->edad" ;
    }
    public function getNombre(){
        return $this->nombre;
        //return $this->infoAlumno();
    }
    public function setNombre($nombre){
        $this->nombre="Nombre: $nombre";

    }
    public function getEdad(){
        return $this->edad;
    }

    
}

?>