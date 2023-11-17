<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Cartao;

use Daniel\CursoPooPhp\Faculdade\Cartao\Cliente;
use Daniel\CursoPooPhp\Faculdade\Cartao\Banco;
use stdClass;

date_default_timezone_set('America/Sao_Paulo');

class CartaoDeCredito
{
    private Banco $banco;
    private Cliente $cliente;
    private string $bandeira;
    private float  $limite;
    private string $vencimento;
    private array  $compras;
    private array  $total;
    private Extrato $extrato;
    private Fatura  $fatura;

    public function __construct(
        Banco $banco,
        Cliente $cliente,
        string $bandeira,
        float $limite,
        string $vencimento, //verificar
        array $compras
    )
    {   
        $this->setCliente($cliente);
        $this->setBanco($banco);
        $this->setBandeira($bandeira);
        $this->setLimite($limite);
        $this->setVencimento($vencimento);
        $this->setCompras($compras);

        $this->fatura = new Fatura($this->getCliente(), $this->getBanco());
    }



    public function getBanco(): Banco
    {
        return $this->banco;
    }

  
    public function setBanco(Banco $banco)
    {
        $this->banco = $banco;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente):void
    {
        $this->cliente = $cliente;
    }

    
    public function getBandeira(): string
    {
        return $this->bandeira;
    }


    public function setBandeira($bandeira):void
    {
        $this->bandeira = $bandeira;
    }

    public function getLimite(): float
    {
        return $this->limite;
    }

    public function setLimite(float|int $limite):void 
    {
        $this->limite = $limite;
    }

    public function getVencimento(): string
    {
        return $this->vencimento;
    }

    public function setVencimento($vencimento):void
    {
        $this->vencimento = $vencimento;
    }

    public function getCompras(): Array
    {
        return $this->compras;
    }


    public function setCompras(Array $compras):void
    {
        $this->compras = $compras;
    }

    public function comprar():bool
    {           

        if(!($this->getTotal() < $this->getLimite())){ 
            return False;
        }   
    
        $this->setLimite($this->getLimite() - $this->getTotal());

        $this->setExtrato(); // Deixa o extrato atual da última compra com os produtos e valor total , data e dados do cliente 
        $this->setFatura();  //Adiciona na fatura os produtos comprados + data 
        
        return True;
    }

    public function getTotal():float
    {   
        $this->total = [];

        foreach ($this->compras as $produto) {
            $this->total[] = $produto->getValor();
        }
       
        return array_sum($this->total);
    }

    public function setExtrato():void
    {      
        $this->extrato = new Extrato( $this->getCliente(), $this->compras, $this->getTotal());
    }

    public function getExtrato()
    {
        return $this->extrato;
    }

    public function getExtratoHtml()
    {
        return $this->extrato->extratoHtml();
    }

    public function setFatura() //Dados para pagamento -> deve retornar todos os produtos comprados e valor (somente adiciona na fatura)
    {   
        $this->fatura->setNovaCompra($this->extrato->getData(), $this->extrato->getProdutos(), $this->extrato->getTotal());
    }

    public function getFatura()
    {
        return $this->fatura->getTotalFatura();
    }
}

class Fatura
{
    private string $data;
    private Cliente $cliente;
    private Banco $banco;
    private array $produtos;
    private array $fatura;
    private float $total;
    
    public function __construct(
        Cliente $cliente,
        Banco $banco
    ){
        $this->cliente = $cliente;
        $this->banco = $banco;
        $this->fatura = [];
        $this->produtos = [];
    }


    public function setNovaCompra(string $data, array $produtos, float $total)
    {   
        $novaCompra = [
            "data" => $data,
            "produtos" => $produtos,
            "total" => $total
        ];


        foreach ($produtos as $produto) {
            
            array_push($this->produtos, $produto);
        }
        array_push($this->fatura, $novaCompra); //informaões detalhadas da compra na fatura 
        
    }

    public function getTotalFatura()
    {
        $total = [];

        foreach ($this->fatura as $produtos ) {
            array_push($total, $produtos["total"]);
        }

        $this->total = array_sum($total);
        array_push($this->fatura, ["total_fatura" => $this->total ]);
        
        return $this;
    }
}






class Extrato
{   
    private string $data;
    private Cliente $cliente;
    private array $produtos;
    private float $total;
    

    public function __construct(
        Cliente $cliente,
        array $produtos,
        float $total
    ){
        $this->data = date('Y-m-d H:i:s');
        $this->cliente = $cliente;
        $this->produtos = $produtos;
        $this->total = $total;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }
    
    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function getTotal(): float
    {
        return $this->total;
    }
    public function extratoHtml():string
    {   
        $html = '<table border="1">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>Data da Compra</th>';
        $html .= '<th>Cliente</th>';
        $html .= '<th>Produto</th>';
        $html .= '<th>Valor</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody>';

        foreach ($this->produtos as $produto) {
            $html .= '<tr>';
            $html .= '<td>' . $this->data . '</td>';
            $html .= '<td>' . $this->cliente->getNome() . '</td>';
            $html .= '<td>' . $produto->getNome() . '</td>';
            $html .= '<td>' . $produto->getValor() . '</td>';
            $html .= '</tr>';
        }

        $html .= '</tbody>';
        $html .= '<tfoot>';
        $html .= '<tr>';
        $html .= '<td colspan="3">Total</td>';
        $html .= '<td>' . $this->total . '</td>';
        $html .= '</tr>';
        $html .= '</tfoot>';
        $html .= '</table>';

        return $html;
    }
}

// objeto extrato: data da compra, informação e valor de cada produto, total da compra


// objeto fatura: data de vencimento, valor total da fatura, 