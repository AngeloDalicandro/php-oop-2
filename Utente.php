<?php



class Utente {

    public $nome;

    public $cognome;

    public $card = new CartaPrepagata() {};

    

    protected $prodottiScelti = [];

    public function __construct($_nome, $_email) {
        $this->nome = $_nome;
        $this->email = $_email;
    }

    public function aggiungiProdotto($prodotto) {
        $this->prodottiScelti[] = $prodotto;
    }

    public function getProdottiScelti() {
        return $this->prodottiScelti;
    }
    
}
?>