<?php

// Classe
class Carro {
    public $cor;
    public $modelo;

    public function buzinar() {
        echo "Biiiii!\n";
    }
}

// Objeto
$meuCarro = new Carro();
$meuCarro->cor = "Vermelho";
$meuCarro->modelo = "Gol";

echo "Meu carro é um " . $meuCarro->modelo . " de cor " . $meuCarro->cor . ".\n";
$meuCarro->buzinar();