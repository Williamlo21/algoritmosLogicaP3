<?php
class MilNumeros
{
    public function generarNumeroAleatorio()
    {
        $al = random_int(1, 5000000);
        return $al;
    }
    public function encontrarPrimo()
    {

        $b = $this->generarNumeroAleatorio();
        $i = 1;
        $cont = 0;
        $div = "";
        while ($i <= $b) {
            if ($b % $i == 0) {
                $cont = $cont + 1;
                if ($i<$b){

                    $div = $i;
                }
            }
            $i++;
        }
        if ($cont > 2) {
            return $b . " No es primo porque es divisible por: ". $div . PHP_EOL;
        }
    }
    public function mostrarResultados()
    {
        for ($i = 1; $i <= 1000; $i++) {
            $resuldatos[] = $this->encontrarPrimo();
        }
        foreach ($resuldatos as $res) {
            echo $res;
        }
        // return $res;
    }
}
$Num = new MilNumeros();
$Num->mostrarResultados();
