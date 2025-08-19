<?php

class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->setValor($valor);
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function imprimeValor() {
        echo "Ingresso comum - Preço: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
    }
}

class IngressoVIP extends Ingresso {
    private $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->setValorAdicional($valorAdicional);
    }

    public function setValorAdicional($valorAdicional) {
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorAdicional() {
        return $this->valorAdicional;
    }

    public function imprimeValor() {
        $valorFinal = $this->getValor() + $this->getValorAdicional();
        echo "Ingresso VIP - Preço: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
    }
}

class IngressoNormal extends Ingresso {
    public function declaracao() {
        echo "Este é um ingresso normal.<br>";
    }

    public function imprimeValor() {
        parent::imprimeValor();
    }
}

class CamaroteInferior extends IngressoVIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function imprimeValor() {
        $valorFinal = $this->getValor() + $this->getValorAdicional();
        echo "Camarote Inferior - Preço: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
    }

    public function imprimeLocalizacao() {
        echo "Localização (Camarote Inferior): " . $this->getLocalizacao() . "<br>";
    }
}

class CamaroteSuperior extends IngressoVIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function imprimeValor() {
        $valorFinal = $this->getValor() + $this->getValorAdicional();
        echo "Camarote Superior - Preço: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
    }

    public function imprimeLocalizacao() {
        echo "Localização (Camarote Superior): " . $this->getLocalizacao() . "<br>";
    }
}

$ingressoNormal = new IngressoNormal(50);
$ingressoNormal->declaracao();
$ingressoNormal->imprimeValor();

echo "<hr>";

$ingressoVIP = new IngressoVIP(100, 50);
$ingressoVIP->imprimeValor();

echo "<hr>";

$camaroteInferior = new CamaroteInferior(150, 75, "Setor A");
$camaroteInferior->imprimeValor();
$camaroteInferior->setLocalizacao("Setor B");
$camaroteInferior->imprimeLocalizacao();

echo "<hr>";

$camaroteSuperior = new CamaroteSuperior(200, 100, "Setor C");
$camaroteSuperior->imprimeValor();
$camaroteSuperior->setLocalizacao("Setor D");
$camaroteSuperior->imprimeLocalizacao();

?>
