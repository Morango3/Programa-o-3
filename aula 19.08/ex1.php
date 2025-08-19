<?php
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->setFuncionario($nome, $salario);
    }

    public function setFuncionario($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getFuncionario() {
        return "{$this->nome}, {$this->salario}";
    }

    public function addAumento(float $valor) {
        $this->salario += $valor;
    }

    public function ganhoAnual() {
        return $this->salario * 12;
    }

    public function exibeDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Salário: {$this->salario}<br>";
        echo "Ganho Anual: {$this->ganhoAnual()}<br>";
    }
}

class Assistente extends Funcionario {
    protected $matricula;

    public function __construct($nome, $salario, $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    public function setAssistente($nome, $salario, $matricula) {
        $this->setFuncionario($nome, $salario);
        $this->matricula = $matricula;
    }

    public function getAssistente() {
        return "{$this->nome}, {$this->salario}, {$this->matricula}";
    }

    public function exibeDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Salário: {$this->salario}<br>";
        echo "Matrícula: {$this->matricula}<br>";
    }
}

class Assistente_Tecnico extends Assistente {
    private $bonus;

    public function __construct($nome, $salario, $matricula, $bonus = 0) {
        parent::__construct($nome, $salario, $matricula);
        $this->bonus = $bonus;
    }

    public function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    public function ganhoAnual() {
        return ($this->salario + $this->bonus) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Bônus: {$this->bonus}<br>";
        echo "Ganho Anual com bônus: {$this->ganhoAnual()}<br>";
    }
}

class Assistente_Administrativo extends Assistente {
    private $ganhoTurnoExtra;

    public function __construct($nome, $salario, $matricula, $ganhoTurnoExtra = 0) {
        parent::__construct($nome, $salario, $matricula);
        $this->ganhoTurnoExtra = $ganhoTurnoExtra;
    }

    public function ganhoAnual() {
        return ($this->salario + $this->ganhoTurnoExtra) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Turno Extra: {$this->ganhoTurnoExtra}<br>";
        echo "Ganho Anual com turno extra: {$this->ganhoAnual()}<br>";
    }
}


$Funcionario = new Funcionario("João", 3000);
echo "Funcionário:";
$Funcionario->exibeDados();
$Funcionario->addAumento(500);
echo "Após aumento:<br>";
$Funcionario->exibeDados();
echo "<hr>";

$Assistente = new Assistente("Carlos", 2800, "T456");
echo "Assistente:";
$Assistente->exibeDados();
$Assistente->addAumento(300);
echo "Após aumento:<br>";
$Assistente->exibeDados();
echo "<hr>";

$Assistente_Tecnico = new Assistente_Tecnico("Maria", 2800, "T789", 200);
echo "Assistente Técnico:";
$Assistente_Tecnico->exibeDados();
echo "<hr>";

$Assistente_Administrativo = new Assistente_Administrativo("Ana", 2600, "AD123", 150);
echo "Assistente Administrativo:";
$Assistente_Administrativo->exibeDados();
echo "<hr>";
?>
