<?php

class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '{$this->titulo}' emprestado com sucesso.\n";
        } else {
            echo "Livro '{$this->titulo}' não está disponível.\n";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro '{$this->titulo}' devolvido.\n";
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}

class Aluno {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function pegarLivro(Livro $livro) {
        if ($livro->isDisponivel()) {
            echo "{$this->nome} pegou o livro '{$livro->getTitulo()}'.\n";
            $livro->emprestar();
        } else {
            echo "{$this->nome} tentou pegar o livro '{$livro->getTitulo()}', mas ele não está disponível.\n";
        }
    }
}

// Criando os objetos (mínimo 3)
$livro1 = new Livro("1984", "George Orwell");
$livro2 = new Livro("Dom Casmurro", "Machado de Assis");

$aluno1 = new Aluno("Ana", "2025001");

// Testando
$aluno1->pegarLivro($livro1);
$aluno1->pegarLivro($livro1); // Tentando pegar novamente (não disponível)
$livro1->devolver();
$aluno1->pegarLivro($livro1); // Agora disponível de novo
