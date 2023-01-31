<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario) {

        parent::__construct($nome,$cpf);
        if($salario <= 0){
            echo "Este salário é inválido" . PHP_EOL;
            return;
        }
        $this->salario = $salario;
    }
    public function alteraNome(string $nome):void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    public function recuperaSalario():float
    {
        return $this->salario;
    }
    abstract public function calculaBonificacao():float;
    public function recebeAumento(float $valorAumento)
    {
        if($valorAumento < 0 ){
            echo "este valor é invalido" . PHP_EOL;
            return;
        }

        $this->salario += $valorAumento;
    }
}


?>



