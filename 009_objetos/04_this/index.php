<?php

class Persona{  
    public  $nombre;
    public  $apellido;
    
    public function __construct( string $n,  string $a){
        //No estoy asignando los valores a los atributos
        //Sino a unas variables locales a este método
        $this->nombre = $n;
        $this->apellido = $a;
    }
}
$p = new Persona ("María", "Ruíz");
//Los atributos no tienen valor
echo "<h1>Nombre -$p->nombre-</h1>";
echo "<h1>Apelido -$p->apellido-</h1>";
