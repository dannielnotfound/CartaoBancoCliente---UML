<?php

declare(strict_types=1);

class ListaDeCompras
{
    private array $listaDeCompras;

    public function setListaDeCompras($produto):void
    {
        $this->listaDeCompras[] = $produto;
    }

    public function getListaDeCompras():array
    {
        return $this->listaDeCompras;
    }

    public function compra(Produto $produto):void
    {
        $this->listaDeCompras[] = $produto;
    }

    public function remover(Produto $produtoRemover):string
    {
        $listaDeProdutos = $this->getListaDeCompras();
        
        foreach($listaDeProdutos as $key =>  $produto) {
            if ($produto->getNome()  == $produtoRemover->getNome()) {
                unset($this->listaDeCompras[$key]);
                return "Produto {$produto->getNome()} removido com sucesso da lista de compras. <br><br>";
            }
        }

    }

    public function total():float
    {
        $precoTotal = 0;
        $listaDeProdutos = $this->getListaDeCompras();
        
        foreach($listaDeProdutos as $produto) {
            $precoTotal += $produto->getPreco();
        }

        return $precoTotal;

    }

    public function extrato():string 
    {

        $html = "<table style='border: 1px solid;'>";
        $html .= "<thead>
                <tr>
                    <th>Produto</th>
                    <th>Descricao</th>
                    <th>Preco</th>
                    <th>Quantidade</th>
                </tr>    
                  <thead>";

        $listaDeProdutos = $this->getListaDeCompras();

        $html .= "<tbody style='border: 1px solid'>";
        foreach($listaDeProdutos as $produto) {
            
            $html .= "<tr style='border: 1px solid'>";

            $html .= "<td>" . $produto->getNome() . "</td>";
            $html .= "<td>" . $produto->getDescricao() . "</td>";
            $html .= "<td>" . "R$ " . $produto->getPreco() . "</td>";
            $html .= "<td style='text-align: center'>" . $produto->getQuantidade() . "</td>";

            $html .= "</tr>";
        }
        
        
        $html .= "</tbody>";
        $html .= "</table>";

        return $html;
    }

    public function getQuantidadeProdutos(): int
    {
        return count($this->getListaDeCompras());
    }
}


class Produto 
{
    private string $nome;
    private string $descricao;
    private int $quantidade;
    private float $preco;

    public function __construct(
        string $nome,
        string $descricao,
        int $quantidade,
        float $preco
    ){
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
    }

    public function setNome(string $nome):void 
    {
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao):void 
    {
        $this->descricao = $descricao;
    }

    public function setQuantidade(int $quantidade):void 
    {
        $this->quantidade = $quantidade;
    }

    public function setPreco(float $preco):void 
    {
        $this->preco = $preco;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getPreco():float
    {
        return $this->preco;
    }

    public function getDescricao():string
    {
        return $this->descricao;
    }

    public function getQuantidade():int
    {
        return $this->quantidade;
    }

}

$produto1 = new Produto('Celular', 'Eletronico', 1, 500);
$produto2 = new Produto('Computador', 'Eletronico', 1, 500);
$produto3 = new Produto('Mochila', 'Acessório', 1, 500);
$produto4 = new Produto('Câmera Fotográfica', 'Eletronico', 1, 500);


$listaDeCompra = new ListaDeCompras();

$listaDeCompra->compra($produto1);
$listaDeCompra->compra($produto2);
$listaDeCompra->compra($produto3);
$listaDeCompra->compra($produto4);


echo $listaDeCompra->remover($produto3);

echo "Você compro um total de {$listaDeCompra->getQuantidadeProdutos()} produtos. O preço total da sua compra foi de R$ {$listaDeCompra->total()} . Segue abaixo o seu extrato: ";

echo $listaDeCompra->extrato();