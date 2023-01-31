<?php
namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Conta\Titular;
abstract class Conta
{
    private Titular  $titular;
    private float  $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {

        $this->titular =$titular;
        $this->saldo = 0;
        Conta::$numeroDeContas++;
    }
    public function saca(float $valorASacar) 
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorDoSaque = $valorASacar + $tarifaDeSaque;
        if($valorDoSaque > $this->saldo){
            echo "Saldo insuficiente" .PHP_EOL;
            return;
        }
        $this->saldo -= $valorDoSaque;

    }
    public function deposita(float $valorADepositar)
    {
        if($valorADepositar < 0){
            echo "Valor necessita ser positivo" . PHP_EOL;
            return;
        }
        $this->saldo += $valorADepositar;

    }


    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas():int
    {
        return Conta::$numeroDeContas;
    }
    abstract protected function percentualTarifa():float;
}

?>

