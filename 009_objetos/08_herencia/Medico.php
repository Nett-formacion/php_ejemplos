<?php

class Medico extends Persona
{
    private $year_titulo;


    //Observa como se usa la propagación de propiedades
    public function __construct(string $nombre, string $apellido, int $year_titulo, private string $especialidad) {
        parent::__construct($nombre, $apellido);
        $this->year_titulo=$year_titulo;

    }
    public function __toString(): string
    {
        return "Médico ".parent::__toString()." Especialidad <span style='color:green'>$this->especialidad</span>";
    }

}
