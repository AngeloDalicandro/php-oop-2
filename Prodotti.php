<?php

class Prodotto {
    public $prodotto;

    public $_marca;

    public $prezzo;

    public function __construct($_marca, $_prodotto, $_prezzo) {
        $this->marca = $_marca;
        $this->prodotto = $_prodotto;
        $this->prezzo = $_prezzo;
    }

}

?>