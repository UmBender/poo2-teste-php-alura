<?php


namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected $nome;
    protected $cpf;

    use AcessoPropriedade;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf  = $cpf;
    }

    public function recuperaNome():string
    {
        return $this->nome;
    }
    public function recuperaCpf():string
    {
        return $this->cpf->recuperaCpf();
    }
    final protected function validaNome(string $nome) {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }
}


?>




