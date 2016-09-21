<?php 

class Produto {

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;

    public function precoComDesconto($valor = 0.1) {
    	//negativo e limite de desconto
    	// if ($valor > 0 && $valor <= 0.5) {
	    //     $this->preco -= $this->preco * $valor;
	    // }
	    return $this->preco - ($this->preco * $valor);
    }

}

?>