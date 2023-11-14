<?php

class Fecha{
    private int $dia;
    private int $mes;
    private int $year;


    private function string_to_fecha(&$dia, &$mes, &$year){
        if (is_string($dia)){
            $fecha = explode("/", $dia);
            $dia = $fecha[0];
            $mes = $fecha[1];
            $year = $fecha[2];
        }
    }
    private function resuelve_nulos(&$dia, &$mes, &$year){
        $dia= $dia ?? date("d");
        $mes= $mes ?? date("m");
        $year= $year ?? date("Y");
    }
    private function valida_fecha(&$dia, &$mes, &$year){
        if (!checkdate($mes, $dia, $year)){
            $dia = date("d");
            $mes = date("m");
            $year = date("Y");
        }
    }
    public function __construct( int|string $dia=null,  int $mes=null, int $year=null){
        //Si no se pasan valores se toma la fecha actual
        $this->string_to_fecha(&$dia, &$mes, &$year);
        $this->resuelve_nulos(&$dia, &$mes, &$year);
        $this->valida_fecha(&$dia, &$mes, &$year);

        //Si la fecha no es válida se toma la fecha actual
        //Asignamos los valores
        $this->dia = $dia;
        $this->mes = $mes;
        $this->year = $year;
    }



   public function __toString():string{
        return "$this->dia/$this->mes/$this->year";
    }

}
