<?php

abstract class Animal
{
    protected int $patas;
    protected string $nombre;
    protected string $raza;

    public function __construct(int $patas, string $nombre, string $raza)
    {
        $this->patas = $patas;
        $this->nombre = $nombre;
        $this->raza = $raza;
    }
    public function __toString(){
        return "$this->nombre,  $this->raza,de $this->patas patas";
    }
    abstract  public function hablar();
}