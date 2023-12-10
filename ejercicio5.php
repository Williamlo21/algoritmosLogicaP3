<?php
class palabra{
    public $pal;
    public function __construct($pal) {
        $this->pal = $pal;
    }

    public function getPal()
    {
        return $this->pal;
    }

    public function setPal($pal)
    {
        $this->pal = $pal;

        return $this;
    }

    public function recorrerPalabra(){
        $p = $this->pal;
        $p = strtolower(str_replace(' ', '', $p));
        $largo = strlen($p);
        $pi = "";

        for ($i = $largo -1; $i>= 0 ; $i--){
            $pi .= $p[$i];
        }
        $this->compararCadena($p,$pi);
    }

    public function compararCadena($a,$b){
        $c1 = $a;
        $c2 = $b;
        if ($c1 === $c2){
            echo $this->pal . " Es palindromo";
        }else{
            echo $this->pal . " No es palindromo";
        }
    }
}


$nueva = new palabra('anilina');
$nueva->recorrerPalabra();
