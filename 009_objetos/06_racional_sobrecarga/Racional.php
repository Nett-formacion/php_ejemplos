<?php

class Racional{
    private int $numerador;
    private int $denominador;


    public function __construct( int|string $numerador=null,  int $denominador=null)
    {
     //Si $numerador es un string, obtengo de ahí los valores $num $den
        //Si no, lo dejo como me lo han pasado
       list($numerador, $denominador)= $this->string_to_racional($numerador,$denominador);

       //Asignamos los valores recibidos o 1 si no se han recibido
        $this->numerador= $numerador ?? 1;
        $this->denominador= $denominador ?? 1;
    }

   public function __toString():string{
        return "$this->numerador/$this->denominador";
    }
    private function string_to_racional(int|string|null $num, ?int $den){
        return  is_string($num)? explode("/", $num):[$num,$den];
        //Se puede desenrrollar así:
        /*
         *
         $datos = [$numerador, $denominador];
         if (is_string($numerador)){
             $racional = explode("/", $numerador);
             $numerador = $racional[0];
             $denominador = $racional[1];
             $datos = [$numerador, $denominador];
        }
        return $datos;
         */
    }

}
