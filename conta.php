<?php


// require_once 'src/Modelo/Conta/Conta.php';
// require_once 'src/Modelo/Endereco.php';
// require_once 'src/Modelo/Pessoa.php';
// require_once 'src/Modelo/Conta/Titular.php';
// require_once 'src/Modelo/Cpf.php';

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoDoArquivo = str_replace('Alura\\Banco','src',$nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    $caminhoDoArquivo .= '.php';
    require_once $caminhoDoArquivo;
    // exit();
});

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Sapirana', 'Centenario', 'Santarem', '358');
$bender = new Titular(new Cpf('123.456.789-10'), 'Gustavo Bender', $endereco);
$primeiraConta = new Conta($bender);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$patricia = new Titular(new Cpf('987.654.321-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1');
$outra = new Conta(new Titular(new Cpf('999.999.999-10'),'ABCDE', $outroEndereco));

unset($segundaConta);

echo Conta::recuperaNumeroDeContas();

?>



