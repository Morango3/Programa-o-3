<?php

class Imovel {
    private $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->setImovel($endereco, $preco);
    }

    public function setImovel($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getImovel() {
        return "Endereço: {$this->endereco}, Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }

    public function exibeDados() {
        echo "Endereço: {$this->endereco}<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}

class Novo extends Imovel {
    private $valorAdicional;

    public function __construct($endereco, $preco, $valorAdicional) {
        parent::__construct($endereco, $preco);
        $this->valorAdicional = $valorAdicional;
    }

    public function setValorAdicional($valorAdicional) {
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorAdicional() {
        return $this->valorAdicional;
    }

    public function exibeDados() {
        parent::exibeDados();
        $total = $this->preco + $this->valorAdicional;
        echo "Adicional (Imóvel Novo): R$ " . number_format($this->valorAdicional, 2, ',', '.') . "<br>";
        echo "Preço Total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }
}

class Velho extends Imovel {
    private $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function exibeDados() {
        parent::exibeDados();
        $final = $this->preco - $this->desconto;
        echo "Desconto (Imóvel Velho): R$ " . number_format($this->desconto, 2, ',', '.') . "<br>";
        echo "Preço Final: R$ " . number_format($final, 2, ',', '.') . "<br>";
    }
}


$Novo = new Novo("Rua A, 123", 300000, 50000);
echo "Imóvel Novo";
$Novo->exibeDados();

echo "<hr>";

$Velho = new Velho("Rua B, 456", 200000, 30000);
echo "Imóvel Velho";
$Velho->exibeDados();

?>
