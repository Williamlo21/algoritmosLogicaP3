<?php

class numero{
    public $n;

    public function __construct($n) {
        $this->n = $n;
    }
    public function getN()
    {
        return $this->n;
    }

    public function setN($n)
    {
        $this->n = $n;
        
        return $this;
    }
    public function esPar(){
        $i=1;
        $num = $this->getN();

        while ($i * $i <= $num) {
            if ($num % $i == 0) {
                $numeros[]= $i;
            }
            $i++;
        }
        $this->multiplicarNumeros($numeros);
    }
    public function recorrerArray($fac){
        $res = "";
        foreach ($fac as $f) {
            $res .= ", ". $f;
        }
        return $res;
    }
    public function multiplicarNumeros($vnum){
        $res = 1;
        foreach($vnum as $n){
            if($n * $res <= $this->n){

                $res *= $n;
                $fac[]=$n;
            }
            }
            echo "Los factores primos de ". $this->n. " son: ". $this->recorrerArray($fac); 
            echo " y la multiplicacion de estos factores da como resultado: ". $res;
            

        }
    
}

$nuevo = new numero(600851475143);
$nuevo->esPar();
