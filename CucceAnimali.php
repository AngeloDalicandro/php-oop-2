<?php
require_once __DIR__ . '/Products.php';

class CucceAnimali extends Prodotto {

    public $dimensione;

    // override
    public function __construct($_marca, $_prodotto, $_prezzo, $_dimensione) {
        $this->marca = $_marca;
        $this->prodotto = $_prodotto;
        $this->prezzo = $_prezzo;
        $this->dimensione = $_dimensione;
    }
};
?>