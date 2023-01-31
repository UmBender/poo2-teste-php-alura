<?php
namespace Alura\Banco\Modelo;

/**
 * 
 */
trait AcessoPropriedade
{
    public function __get(string $nomeDoAtributo)
    {
        $metodo = ucfirst($nomeDoAtributo);
        $metodo = 'recupera'.$metodo;
        return $this->$metodo();
    }
}



?>

