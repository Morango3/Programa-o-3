<?php

class Quarto {
    private $numero;
    private $precoBase;

    public function __construct($numero, $precoBase) {
        $this->numero = $numero;
        $this->precoBase = $precoBase;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getPrecoBase() {
        return $this->precoBase;
    }

    public function calcularDiaria() {
        return $this->precoBase;
    }
}

class Padrao extends Quarto {
    public function __construct($numero) {
        parent::__construct($numero, 300.00);
    }

    public function calcularDiaria() {
        return $this->getPrecoBase();
    }
}

class Deluxe extends Quarto {
    private $hospedes;

    public function __construct($numero, $hospedes) {
        parent::__construct($numero, 300.00 * 1.2); 
        $this->hospedes = $hospedes;
    }

    public function calcularDiaria() {
        $diaria = $this->getPrecoBase();
        if ($this->hospedes >= 2) {
            $diaria *= 1.1; 
        }
        return $diaria;
    }
}

class Suite extends Quarto {
    private $finalSemana;

    public function __construct($numero, $finalSemana) {
        parent::__construct($numero, 300.00 * 1.5);
        $this->finalSemana = $finalSemana;
    }

    public function calcularDiaria() {
        $diaria = $this->getPrecoBase();
        if ($this->finalSemana) {
            $diaria *= 1.2; 
        }
        return $diaria;
    }
}


$quarto1 = new Padrao(101);
echo "Quarto Padrão: R$ " . $quarto1->calcularDiaria() . "\n";

$quarto2 = new Deluxe(202, 3);
echo "Quarto Deluxe (3 hóspedes): R$ " . $quarto2->calcularDiaria() . "\n";

$quarto3 = new Suite(303, true);
echo "Suíte (fim de semana): R$ " . $quarto3->calcularDiaria() . "\n";
?>