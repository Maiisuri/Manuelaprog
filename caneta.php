<?php
class Caneta {
public $marca;
private $cor;
private $ponta;

public function getPonta() {
return $this->ponta;
}
public function getcor() {
return $this->cor;
}
public function getmarca() {
return $this->marca;
}
public function setPonta ($ponta) {
$this->ponta = $ponta;
}
public function setcor($cor) {
$this->cor = $cor;
}
public function setmarca ($marca) {
$this->marca = $marca;
}

public function _ construct() {
$this->ponta = 0.5;
}

}
$c1 = new Caneta();
$c2= new Caneta();

print_r($c1);
print_r($c2);
?>
