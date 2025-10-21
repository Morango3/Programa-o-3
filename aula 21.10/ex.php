<?php
//Atividade 1
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Método comum (não abstrato)
    final public function fazerAniversario() {
        $this->idade++;
        echo "<p>Parabéns, {$this->nome}! Agora você tem {$this->idade} anos.</p>";
    }

    // Método abstrato
    abstract public function apresentar();
}

class Visitante extends Pessoa {
    public function apresentar() {
        echo "<p>Sou um visitante chamado {$this->nome}.</p>";
    }
}

//Atividade 2
$visitante1 = new Visitante("Carlos", 30, "Masculino");

$visitante1->apresentar();
$visitante1->fazerAniversario();

//Atividade 3
class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function apresentar() {
        echo "<p>Sou o aluno {$this->nome}, do curso de {$this->curso}.</p>";
    }

    public function pagarMensalidade() {
        echo "<p>Mensalidade de {$this->nome} paga com sucesso!</p>";
    }
}

$aluno1 = new Aluno("Maria", 21, "Feminino", 12345, "Engenharia");
$aluno1->apresentar();
$aluno1->pagarMensalidade();
$aluno1->fazerAniversario();

//Atividade 4
class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "<p>Bolsa renovada para {$this->nome}!</p>";
    }

    public function pagarMensalidade() {
        echo "<p>{$this->nome} é bolsista! Pagamento com desconto de {$this->bolsa}%.</p>";
    }
}
$bolsista1 = new Bolsista("João", 19, "Masculino", 6789, "Sistemas de Informação", 50);

$bolsista1->apresentar();
$bolsista1->renovarBolsa();
$bolsista1->pagarMensalidade();
$bolsista1->fazerAniversario();

//Atividade 5
final class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $esp, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $esp;
        $this->salario = $salario;
    }

    public function apresentar() {
        echo "<p>Sou o professor {$this->nome}, especialista em {$this->especialidade}.</p>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "<p>O salário de {$this->nome} foi reajustado para R$ {$this->salario}.</p>";
    }
} 
$pessoas = [
    new Visitante("Carlos", 30, "Masculino"),
    new Aluno("Maria", 20, "Feminino", 123, "Engenharia"),
    new Bolsista("João", 19, "Masculino", 456, "Sistemas", 50),
    new Professor("Ana", 40, "Feminino", "Matemática", 7000)
];


foreach ($pessoas as $p) {
    echo "<p>Classe: " . get_class($p) . "</p>";

    if ($p instanceof Pessoa) echo "<p>É uma Pessoa.</p>";
    if ($p instanceof Aluno) echo "<p>É um Aluno.</p>";
    if ($p instanceof Bolsista) echo "<p>É um Bolsista.</p>";
    if ($p instanceof Professor) echo "<p>É um Professor.</p>";
}

?>
