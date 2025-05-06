<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes()
    {
        echo " Nome: {$this->nome}, Preço: R$ {$this->preco}, Quantidade: {$this->quantidade} .<br>";

    } // this é uma pseudo variável



}
$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = 2.5;
$produto1->quantidade = 10;

$produto2 = new Produto();
$produto2->nome = "Calça Jeans";
$produto2->preco = 89.90;
$produto2->quantidade = 50;

$produto1->exibirInformacoes();
$produto2->exibirInformacoes();



function mostrarMediaPrecos($produto1, $produto2)
{
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "A média dos preços dos produtos é: R$ " . number_format($media, 2, ',', '.') . "<br>";
}



mostrarMediaPrecos($produto1, $produto2);



?>