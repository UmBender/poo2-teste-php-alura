<?php
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Cpf;
require_once 'autoload.php';


$umEndereco = new Endereco('Sei lá', 'Bairro qualquer', 'Minha Rua','71B');
$outroEndereco = new Endereco('Sei lá2', 'Bairro qualquer2', 'Minha Rua2','71B2');


echo $outroEndereco.PHP_EOL;
echo $umEndereco->bairro.PHP_EOL;
$outroEndereco->bairro = "ASDASDASDAS";
echo $outroEndereco;
$umaPessoa = new Desenvolvedor('bender', new Cpf('123.456.789-10'),2000);
echo $umaPessoa->nome;

?>



