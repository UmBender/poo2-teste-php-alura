<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Pessoa;

class Autenticador
{
    public function tentaLogin(Pessoa $diretor, string $senha): bool
    {
        if($diretor->podeAutenticar($senha)){
            echo "Ok. Usuário logado no sistema";
            return true;
        }
        echo "Ops. Senha Incorreta";
        return false;

    }
}


?>

