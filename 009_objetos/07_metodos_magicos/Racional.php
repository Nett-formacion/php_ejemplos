<?php

class Racional
{
    private int $numerador;
    private int $denominador;

    public function __construct(int|string $numerador = null, int $denominador = null, int $year = null)
    {
        //Si $numerador es un string, obtengo de ahí los valores $num $den
        //Si no, lo dejo como me lo han pasado
        list($numerador, $denominador) = $this->string_to_racional($numerador, $denominador);

        //Asignamos los valores recibidos o 1 si no se han recibido
        $this->numerador = $numerador ?? 1;
        $this->denominador = $denominador ?? 1;
    }

    private function string_to_racional(int|string|null $num, ?int $den)
    {
        return is_string($num) ? explode("/", $num) : [$num, $den];
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

    public function __toString(): string
    {
        return "$this->numerador/$this->denominador";
    }

    public function __destruct()
    {
        echo "<h2>Se destruye el objeto <span style='color:red'>$this</span>";

    }

    public function __call($name, $arguments)
    {
        $msj = "<h2>Se ha llamado al método <span style='color:red'>$name</span> con los argumentos: ";
        $msj .= "<span style='color:red'>".  print_r($arguments, true)."</span>";
        return $msj;
    }

    public function __get($name)
    {
        echo "<h2>Se ha llamado al método $name";
    }

}
