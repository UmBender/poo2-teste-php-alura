<?php
namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Autenticavel;
class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->endereco = $endereco;
    }
 
    public function recuperaEndereco():endereco
    {
        return $this->endereco;
    }
    public function podeAutenticar(string $senha):bool
    {
        return $senha === 'abcd';
    }
 
}




?>
