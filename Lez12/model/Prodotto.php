<?php

namespace maboglia\app;

class Prodotto {
    
    public static int $contatore = 1;

    public const ALIQ_IVA = 0.22;

    // public string $nome;
    // public float $prezzo;

    // public int $quantita;

    public float $prezzo_iva;
    public int $codProdotto;

    public function __construct(public string $nome, public float $prezzo, public int $quantita){

        // $this->nome = $nome;
        // $this->prezzo = $prezzo;
        // $this->quantita = $quantita;
        $this->codProdotto = self::$contatore++;
        $this->prezzo_iva = $this->prezzo * self::ALIQ_IVA;
    }



}






