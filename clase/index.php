<?php
//clase: molde para crear mas objetos

class Coche{
    //atributos o propiedades (variable)
    public $color = 'rojo';
    public $marca = 'ferrari';
    public $modelo = 'aventador';
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;

    //metodo-> acciones que hace el carro(funciones)

    public function getcolor(){
        return $this ->color;
    }

    public function setcolor($color){
        $this->color = $color; 
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }
}

//crear un objeto 
$carroEspecial = new Coche();

//var_dump($carroEspecial);
echo 'la velocidad de mi carro es:'.$carroEspecial->getVelocidad().'<br>';

echo 'El color de mi carro es: '.$carroEspecial->getColor().'<br>';

$carroEspecial->setColor('amarillo');

echo $carroEspecial->getColor().'<br>';

$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();

echo 'Ahora la velocidad de mi carro es:' .$carroEspecial->getVelocidad().'<br>';

$carroEspecial->frenar();

echo 'Ahora la velocidad de mi carro es:' .$carroEspecial->getVelocidad().'<br>';


