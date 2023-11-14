<?php

class Fecha{
    public $dia;
    var int $mes;
    private int|string $year;


    public function __construct( int $dia=null,  int $mes=null, int $year=null){
        //Si no se pasan valores se toma la fecha actual
        $dia= $dia ?? date("d");
        $mes= $mes ?? date("m");
        $year= $year ?? date("Y");

        //Si la fecha no es válida se toma la fecha actual
        if (!checkdate($mes, $dia, $year)){
            $dia = date("d");
            $mes = date("m");
            $year = date("Y");
        }
        //Asignamos los valores
        $this->dia = $dia;
        $this->mes = $mes;
        $this->year = $year;
    }


public function mostrar_fecha(){
    return "$this->dia/$this->mes/$this->year";
}


    public function __toString():string{
        return "Nombre: $this->nombre, Apellido: $this->apellido";
    }

}
