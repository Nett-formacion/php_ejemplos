<?php
class Persona{

    protected $nombre;
    protected $apellido;
    public function __construct( string $nombre, string $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function __toString(): string
    {
        return "<span style='color:green'>$this->apellido, $this->nombre</span>";
    }

}
