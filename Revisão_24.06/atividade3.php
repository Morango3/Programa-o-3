<?php

class ContaBancaria {
    private $titular;
    private $saldo;

    // Construtor
    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    // Método para depositar
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado com sucesso.\n";
        } else {
            echo "Valor de depósito inválido.\n";
        }
    }

    // Método para sacar
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso.\n";
        } else {
            echo "Saque inválido. Verifique o valor e o saldo disponível.\n";
        }
    }

    // Getter do titular
    public function getTitular() {
        return $this->titular;
    }

    // Getter do saldo
    public function getSaldo() {
        return $this->saldo;
    }
}

// Exemplo de uso
$conta = new ContaBancaria("Carlos", 1000);
echo "Titular: " . $conta->getTitular() . "\n";
echo "Saldo inicial: R$ " . $conta->getSaldo() . "\n";

$conta->depositar(500);
$conta->sacar(300);
$conta->sacar(1500); // inválido
echo "Saldo final: R$ " . $conta->getSaldo() . "\n";
