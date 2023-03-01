<?php
// Classe Answer
class Answer {
    const BONNE_REPONSE = true; // constante pour identifier une bonne réponse
    private $texte;
    private $estBonneReponse;

    public function __construct($texte, $estBonneReponse = false) {
        $this->texte = $texte;
        $this->estBonneReponse = $estBonneReponse;
    }

    public function getTexte() {
        return $this->texte;
    }

    public function estBonneReponse() {
        return $this->estBonneReponse;
    }
}


?>