<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\{Titular,Conta,ContaPoupanca,ContaCorrente};
use Alura\Banco\Modelo\{Funcionario,Endereco,Cpf};

$conta = new ContaPoupanca(
    new Titular(
        new Cpf("123.456.789-10"),
        "Bender",
        new Endereco('Sapiranga','bairro teste','rua teste', '1')
    )
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();



$umFuncionario = new Funcionario(
    'Vinicius',
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);
$umaFuncionaria = new Funcionario(
    'Diana',
    new Cpf('987.654.321-01'),
    'Desenvolvedora',
    1500
);
$controlador = new controladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();





?>


