<?php
require_once __DIR__ . '/Products.php';

class Cibo extends Prodotto {

    public $valoriNutritivi;

    // override
    public function __construct($_marca, $_prodotto, $_prezzo, $_valoriNutritivi) {
        $this->marca = $_marca;
        $this->prodotto = $_prodotto;
        $this->prezzo = $_prezzo;
        $this->valoriNutritivi = $_valoriNutritivi;
    }
};
?>