<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoDoArquivo = str_replace('Alura\\Banco','src',$nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    $caminhoDoArquivo .= '.php';
    // echo $caminhoDoArquivo . PHP_EOL;
    require_once $caminhoDoArquivo;
    // exit();
});


?>
