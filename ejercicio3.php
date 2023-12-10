<?php
class Ordenar{
    public $n;
    
    public function __construct(...$n)
    {
        $this->n = $n;
    }
    
    public function ordenarSeleccion()
    {
        // $n es el array
        // Recorremos la lista
        // $i sera la posicion del indice, cada vez de menor n mayor
        // $pm es el primer indice, en este caso el indice que usamos para buscar.
        // $j es la posicion que esta recorriendo en el array
        // $temp es un temporal que se usa para guardar el indice que se esta buscando
        $count = count($this->n);

        for ($i = 0; $i < $count - 1; $i++) {
            $pm = $i;

            for ($j = $i + 1; $j < $count; $j++) {
                if ($this->n[$j] < $this->n[$pm]) {
                    $pm = $j;
                }
            }

            $temp = $this->n[$i];
            $this->n[$i] = $this->n[$pm];
            $this->n[$pm] = $temp;
        }
        return $this->n;
    }

    public function mostraResultados()
    {
        $res = $this->ordenarSeleccion();
        $ao = "";
        foreach ($res as $r) {
            $ao .= $r. PHP_EOL;
            // var_dump($ao);
        }
        return $ao; 
    }
}

$a = new Ordenar(5,9,6,2,0,7,1);
echo $a->mostraResultados();