<?php 

class Produto {

    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $categoria;
    private $usado;

    function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->usado = $usado;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function isUsado() {
        return $this->usado;
    }

    public function setUsado($usado) {
        $this->usado = $usado;
    }

    public function precoComDesconto($valor = 0.1) {
    	// negativo e limite de desconto
    	if ($valor > 0 && $valor <= 0.5) {
	    	return $this->preco - ($this->preco * $valor);
	    }
	    return $this->preco;
    }
}

?>