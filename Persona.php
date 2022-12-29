<?php

class Persona{
    public string $nombre;
    public string $apellidos;
    public int $edad;
    public static $contador=1;
    public int $id;

    function __construct($nombre,$apellidos,$edad)
    {
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->edad=$edad;
        $this->id=self::$contador;
        self::$contador++;
    }
    
    static function getContador(){
        return "El numero de personas es ".self::$contador-1;
    }
}

?>