<?php
namespace Alura\Banco\Modelo;
use Alura\Banco\Modelo\Pessoa;

/** 
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 *
 */
class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    use AcessoPropriedade;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua    = $rua;
        $this->numero = $numero;
    }
    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
    public function recuperaCidade():string
    {
        return $this->cidade;
    }
    public function recuperaBairro():string
    {
        return $this->bairro;
    }
    public function recuperaRua():string
    {
        return $this->rua;
    }
    public function recuperaNumero():string
    {
        return $this->numero;
    }
    public function alteraCidade(string $valor):void
    {
        $this->cidade = $valor;
    }
    public function alteraRua(string $valor):void
    {
        $this->rua = $valor;
    }
    public function alteraBairro(string $valor):void
    {
        $this->bairro = $valor;
    }
    public function alteraNumero(string$valor):void
    {
        $this->numero = $valor;
    }
 
    public function __get(string $nomeDoAtributo) {
        //recupera -> recuperaRua;
        $metodo = ucfirst($nomeDoAtributo);
        $metodo = 'recupera'.$metodo;
        return $this->$metodo();
    }
    public function __set($nomeAtributo, $valor):void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }
}


?>


