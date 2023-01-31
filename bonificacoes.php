<?php
require_once "autoload.php";

use Alura\Banco\Modelo\Conta\{Titular,Conta,ContaPoupanca,ContaCorrente};
use Alura\Banco\Modelo\{Endereco,Cpf};
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Diretor,Desenvolvedor,EditorDeVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vinicius',
    new Cpf('123.456.789-10'),
    1000
);
$umaFuncionaria = new EditorDeVideo(
    'Diana',
    new Cpf('987.654.321-01'),
    1500
);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$umFuncionario->sobeDeNivel();
echo $umFuncionario->recuperaSalario().PHP_EOL;
echo $controlador->recuperaTotal();


?>

