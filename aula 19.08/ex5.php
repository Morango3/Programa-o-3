<?php

class Funcionario {
    protected $nome;
    protected $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function exibeDados() {
        echo "Nome: {$this->nome} <br>";
        echo "Matrícula: {$this->matricula} <br>";
    }
}

class Assistente_Administrativo extends Funcionario {
    private $codigo;

    public function __construct($nome, $matricula, $codigo) {
        parent::__construct($nome, $matricula);
        $this->codigo = $codigo;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Código Administrativo: {$this->codigo}<br>";
    }
}

class Assistente_Tecnico extends Funcionario {
    private $codigo;

    public function __construct($nome, $matricula, $codigo) {
        parent::__construct($nome, $matricula);
        $this->codigo = $codigo;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Código Técnico: {$this->codigo}<br>";
    }
}

class Animal {
    protected $nome;
    protected $raca;

    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function caminha() {
        echo "{$this->nome} está caminhando...<br>";
    }
}

class Cachorro extends Animal {
    public function late() {
        echo "{$this->nome} está latindo: Au au!<br>";
    }
}

class Gato extends Animal {
    public function mia() {
        echo "{$this->nome} está miando: Miau!<br>";
    }
}

class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibeDados() {
        echo "Nome: {$this->nome} <br>";
        echo "Idade: {$this->idade} anos <br>";
    }
}

class Rica extends Pessoa {
    public function exibeDados() {
        parent::exibeDados();
        echo "Condição: Rica <br>";
    }
}

class Pobre extends Pessoa {
    public function exibeDados() {
        parent::exibeDados();
        echo "Condição: Pobre <br>";
    }
}

class Miseravel extends Pessoa {
    public function exibeDados() {
        parent::exibeDados();
        echo "Condição: Miserável <br>";
    }
}

// ------------------ Teste ------------------
class Teste {
    function Main() {
        $Assistente_Administrativo2 = new Assistente_Administrativo("Jovem", null, "AD789");
        echo "<br>Assistente Administrativo:<br>";
        $Assistente_Administrativo2->exibeDados();

        $Assistente_Tecnico2 = new Assistente_Tecnico("Carlos", null, "T456");
        echo "<br>Assistente Técnico:<br>";
        $Assistente_Tecnico2->exibeDados();

        $Cachorrinho = new Cachorro("Fluffy", "Poodle");
        echo "<br>Cachorrinho:<br>";
        $Cachorrinho->late();
        $Cachorrinho->caminha();

        $Gatinho = new Gato("Mimi", "Persa");
        echo "<br>Gatinho:<br>";
        $Gatinho->mia();
        $Gatinho->caminha();

        $Rica2 = new Rica("Ana", 35);
        echo "<br>Rica:<br>";
        $Rica2->exibeDados();

        $Pobre2 = new Pobre("Pedro", 28);
        echo "<br>Pobre:<br>";
        $Pobre2->exibeDados();

        $Miseravel2 = new Miseravel("João", 45);
        echo "<br>Miserável:<br>";
        $Miseravel2->exibeDados();
    }
}

$Teste = new Teste();
$Teste->Main();

?>
