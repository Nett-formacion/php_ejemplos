<?php
class Bailarin extends Persona{

    private $estilo;
    public function __construct(string $nombre, string $apellido, string $estilo){
        parent::__construct($nombre, $apellido);
        $this->estilo=$estilo;
    }
    public function __toString(): string
    {
        return "Bailarín ". parent::__toString()." Estilo: <span style='color:green'>$this->estilo</span>";
    }

}
