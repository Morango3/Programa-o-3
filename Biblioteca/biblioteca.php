<?php

// Classe Livro
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual;

    public function __construct($titulo = "", $autor = "", $anoPublicacao = 0, $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
        $this->leitorAtual = null;
    }

    // Getters
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }

    public function getLeitorAtual() {
        return $this->leitorAtual;
    }

    // Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setAnoPublicacao($ano) {
        $this->anoPublicacao = $ano;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    // Exibir informações
    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
        echo "Leitor atual: " . ($this->leitorAtual ?? "Nenhum") . "<br><br>";
    }

    // Emprestar livro
    public function emprestar($nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "O livro '{$this->titulo}' foi emprestado para {$nomeLeitor}.<br>";
        } else {
            echo "O livro '{$this->titulo}' já está emprestado para {$this->leitorAtual}.<br>";
        }
    }

    // Devolver livro
    public function devolver() {
        echo "O livro '{$this->titulo}' foi devolvido por {$this->leitorAtual}.<br>";
        $this->disponivel = true;
        $this->leitorAtual = null;
    }

    // Verificar quem pegou o livro
    public function quemPegou() {
        return $this->leitorAtual ?
            "O livro '{$this->titulo}' está com {$this->leitorAtual}.<br>" :
            "O livro '{$this->titulo}' está disponível.<br>";
    }

    public function estaDisponivel() {
        return $this->disponivel ?
            "O livro '{$this->titulo}' está disponível para empréstimo.<br>" :
            "O livro '{$this->titulo}' não está disponível no momento.<br>";
    }
}

// Classe Leitor
class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome = "", $email = "", $telefone = "") {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Exibir dados do leitor
    public function exibirLeitor() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br><br>";
    }
}
    // Classe Biblioteca
    class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nome) {
        $this->nomeBiblioteca = $nome;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
        echo "Livro '{$livro->getTitulo()}' adicionado à biblioteca.<br>";
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
        echo "Leitor '{$leitor->getNome()}' cadastrado na biblioteca.<br>";
    }

    public function listarLivros() {
        echo "<h3>📚 Livros na Biblioteca:</h3>";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        echo "<h3>👤 Leitores Cadastrados:</h3>";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}

//////////////////////////
// CENÁRIO DE TESTE
//////////////////////////

echo "<h2>📖 Sistema da Biblioteca Comunitária</h2>";

// Criando biblioteca
$biblioteca = new Biblioteca("Biblioteca Comunitária Esperança");

// Criando leitores
$leitor1 = new Leitor("Carlos Mendes", "carlos@email.com", "(21) 98888-7777");
$leitor2 = new Leitor("Ana Souza", "ana@email.com", "(11) 97777-5555");

// Adicionando leitores à biblioteca
$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

// Criando livros
$livro1 = new Livro("Capitães da Areia", "Jorge Amado", 1937);
$livro2 = new Livro("A Hora da Estrela", "Clarice Lispector", 1977);

// Adicionando livros à biblioteca
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

// Listando dados
$biblioteca->listarLeitores();
$biblioteca->listarLivros();

// Empréstimo
$livro1->emprestar($leitor1->getNome());
echo $livro1->quemPegou();

// Devolução
$livro1->devolver();
echo $livro1->quemPegou();
