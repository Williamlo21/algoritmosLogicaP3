<?php

class Ordenar
{
  public $n;

  
    public function getN()
    {
      return $this->n;
    }
  
    public function setN($n)
    {
      $this->n = $n;
  
      return $this;
    }

  public function __construct(...$n)
  {
    $this->n = $n;
  }

  public function menorAMayor()
  {
    $n = $this->n;
    $nuevaLista = [];
    $cont = count($n);

    while (count($nuevaLista) < $cont) {
      $m = min($n); 
      $nuevaLista[] = $m; 

      $indice = array_search($m,$n);
      unset($n[$indice]);
      $n=array_values($n);

    }

    return $nuevaLista;
  }

  public function mostrarResultado(){
    $lista= $this->menorAMayor();
    $res="";
    foreach ($lista as $l){
      $res .= $l . PHP_EOL;
    }
    return $res;
  }

}
$lista = new Ordenar(8,9,6,2,3,2,32,2,2,2,8,7,6,2,14,0,2);
echo $lista->mostrarResultado();
