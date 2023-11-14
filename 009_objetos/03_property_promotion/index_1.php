<?php
class Persona
{
    private string $nombre;
    private string $apellido;
    private int $edad;

    public function __construct(string $nombre, string $apellido, string $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function __toString(): string
    {
     return "$this->apellido, $this->nombre de $this->edad años";
    }
}

$p1 = new Persona("Juan", "García",25);
echo $p1;
