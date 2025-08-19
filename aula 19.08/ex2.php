<?php

class Animal {
    private $nome;
    private $raca;

    public function __construct($nome, $raca) {
        $this->setAnimal($nome, $raca);
    }

    public function setAnimal($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function getAnimal() {
        return "{$this->nome}, {$this->raca}";
    }

    public function exibeDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Raça: {$this->raca}<br>";
    }

    public function caminha() {
        echo "{$this->nome} está caminhando...<br>";
    }
}

class Cachorro extends Animal {
    public function __construct($nome, $raca) {
        parent::__construct($nome, $raca);
    }

    public function late() {
        echo "O cachorro começou a latir! <br>";
    }
}

class Gato extends Animal {
    public function __construct($nome, $raca) {
        parent::__construct($nome, $raca);
    }

    public function mia() {
        echo "O gato soltou um miado! <br>";
    }
}

$Cachorro = new Cachorro("Rex", "Labrador");
echo "Cachorro: <br>";
$Cachorro->exibeDados();
$Cachorro->caminha();
$Cachorro->late();

echo "<hr>";

$Gato = new Gato("Mia", "Siamês");
echo "Gato: <br>";
$Gato->exibeDados();
$Gato->caminha();
$Gato->mia();

echo "<br><hr><br>";

class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->setPessoa($nome, $idade);
    }

    public function setPessoa($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getPessoa() {
        return "{$this->nome}, {$this->idade} anos";
    }

    public function exibeDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade}<br>";
    }
}

class Rica extends Pessoa {
    private $dinheiro;

    public function fazCompas() {
        echo "{$this->nome} está fazendo compras no shopping.<br>";
    }
}

class Pobre extends Pessoa {
    private $trabalho;

    public function trabalha() {
        echo "{$this->nome} está trabalhando duro.<br>";
    }
}

class Miseravel extends Pessoa {
    public function Mendiga() {
        echo "{$this->nome} está pedindo esmola.<br>";
    }
}


$Rica = new Rica("João", 30);
echo "Pessoa Rica: <br>";
$Rica->exibeDados();
$Rica->fazCompas();

echo "<hr>";

$Pobre = new Pobre("Maria", 25);
echo "Pessoa Pobre: <br>";
$Pobre->exibeDados();
$Pobre->trabalha();

echo "<hr>";

$Miseravel = new Miseravel("José", 40);
echo "Pessoa Miserável: <br>";
$Miseravel->exibeDados();
$Miseravel->Mendiga();

?>
