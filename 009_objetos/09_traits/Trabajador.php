<?php

trait Trabajador
{
    private $sueldo;
    public function set_sueldo(int $sueldo){
        $this->sueldo=$sueldo;
    }

    public function get_sueldo(){
        return $this->sueldo;
    }
}