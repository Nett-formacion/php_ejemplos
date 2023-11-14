<?php

class Fecha{
    private int $dia;
    private int $mes;
    private int $year;


    public function __construct( int|string $dia=null,  int $mes=null, int $year=null){
        //Si no se pasan valores se toma la fecha actual
        if (is_string($dia)){
            $fecha = explode("/", $dia);
            $dia = $fecha[0];
            $mes = $fecha[1];
            $year = $fecha[2];
        }
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



   public function __toString():string{
        return "$this->dia/$this->mes/$this->year";
    }

}
