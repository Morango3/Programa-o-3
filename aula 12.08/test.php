<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo { //ATIVIDADE 3
    public $tipoCombustivel ;

    public function mostrarCombustivel(){
        echo "O carro é movido a combustível do tipo  $this->tipoCombustivel";
    }

    public function ligarLimpador() {
        echo "Limpador ligado";
    }
}

class CarroEletrico extends Carro {
    public function carregarBateria(){
        echo "Bateria carregada";
    }
}


class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!";
    }
     public function andar() { //ATIVIDADE 2
        echo "Moto está em movimento";
     }
}

class Caminhao extends Veiculo{ //ATIVIDADE 1
    public function carregarCarga() {
        echo "Carga carregada com sucesso!";
    }
}


$carro = new Carro(); //ATIVIDADE 4
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->andar();
echo "<br>";
$carro->ligarLimpador();

echo "<hr>";

$carro2 = new Carro();
$carro2->modelo = "Uno";
$carro2->cor = "Preto";
$carro2->ano = 2014;
$carro2->andar();
echo "<br>";
$carro2->ligarLimpador();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->andar();
echo "<br>";
$moto->darGrau();

echo "<hr>";

$moto2 = new Moto();
$moto2->modelo = "Yamara";
$moto2->cor = "Vermelha";
$moto2->ano = 2014;
$moto2->parar();
echo "<br>";
$moto2->darGrau();

echo "<hr>";

$carro3 = new CarroEletrico(); //ATIVIDADE 5
$carro3->modelo = "HB20";
$carro3->cor = "Cinza";
$carro3->ano = 2022;
$carro3->tipoCombustivel = "Flex";
$carro3->andar();
echo "<br>";
$carro3->ligarLimpador();
echo "<br>";
$carro3->mostrarCombustivel();
echo "<br>";
$carro3->carregarBateria();

echo "<hr>";


