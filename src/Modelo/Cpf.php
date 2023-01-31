<?php
namespace Alura\Banco\Modelo;
use Alura\Banco\Modelo\Pessoa;
final class Cpf
{
    private string $valor;

    public function __construct(string $cpf) {
        $this->valor = $cpf;
    }

    public function recuperaCpf():string
    {
        return $this->valor;
    }

}
?>


