<?php

namespace maboglia\app;

class ProdottiCtrl {
    
    private array $prodotti = [];

    function addProdotto(Prodotto $prodotto) : void {
        $this->prodotti[] = $prodotto;
    }

    function getProdotti() : array {
        return $this->prodotti;
    }


}

