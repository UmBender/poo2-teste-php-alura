<?php

require_once "autoload.php";
use Alura\Banco\Modelo\Conta\{Titular,Conta,ContaPoupanca,ContaCorrente};
use Alura\Banco\Modelo\{Endereco,Cpf};
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Diretor,Desenvolvedor,EditorDeVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

use Alura\Banco\Service\Autenticador;
$autenticador = new Autenticador();

$umDiretor = new Titular(
    new Cpf("123.456.789-10"),
    "João da Silva",
    new Endereco("asf","asdf","asdf","asdf")
);
$autenticador->tentaLogin($umDiretor,'abcd');
?>



