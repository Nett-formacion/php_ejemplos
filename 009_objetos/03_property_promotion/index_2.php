<?php
class Persona
{

    public function __construct(private string $nombre, private string $apellido, private string $edad)
    {}
    public function __toString(): string
    {
        return "$this->apellido, $this->nombre de $this->edad años";
    }
}
$p1 = new Persona("Juan", "García",25);
echo $p1;