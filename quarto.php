<?php
class Quarto {
    private $numero;
    private $preco;
}
class Standard extends Quarto {
    public function __construct() {
        $this->preco = 300.00;
    }
    public function getPreco() {
        return $this->preco;
    }
}
class Deluxe extends Quarto {
    public function getPreco($hospedes) {
        if ($hospedes > 2) {
            return (300.00 * 1.5) * 1.1;
        } else {
            return 300.00 * 1.2;
        }
    }
}
class Suite extends Quarto {
    public function getPreco($dia) {
        if ($dia == 1 || $dia == 7) {
            return (300.00 * 1.5) * 1.5;
        } else {
            return 300.00 * 1.5;
        }
    }
}

$standard = new Standard();
echo "Preço Standard: R$ " . $standard->getPreco() . "\n";

$deluxe = new Deluxe();
echo "Preço Deluxe com 3 hóspedes: R$ " . $deluxe->getPreco(3) . "\n";
echo "Preço Deluxe com 2 hóspedes: R$ " . $deluxe->getPreco(2) . "\n";

$suite = new Suite();
echo "Preço Suite no dia 1: R$ " . $suite->getPreco(1) . "\n";
echo "Preço Suite no dia 3: R$ " . $suite->getPreco(3) . "\n";

?>
