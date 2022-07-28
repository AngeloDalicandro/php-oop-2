<?php

class CartaPrepagata {

    public $saldo;

    public function __construct($_saldo) {
        $this->saldo = $_saldo;
    }

    public function calcolaPrezzoTotale() {
        $sommaTotale = 0;
        foreach($this->prodottiScelti as $prodotto) {
            $sommaTotale += $prodotto->prezzo;
        }

        $sommaTotale -= $sommaTotale * $this->sconto / 100;

        return $sommaTotale;
    }

    public function effettuaPagamento() {
        $totaleDaPagare = $this->calcolaPrezzoTotale();
        var_dump($totaleDaPagare);

        if($this->saldo < $totaleDaPagare) {
            die('Saldo non disponibile');
        } else {
            return 'ok';
        }
    }
}
?>