<?php

// Classe Question
class Question {
    private $corps;
    private $reponses = array();
    private $explications;

    public function __construct($corps) {
        $this->corps = $corps;
    }

    public function addAnswer(Answer $reponse) {
        $this->reponses[] = $reponse;
    }

    public function setExplications($explications) {
        $this->explications = $explications;
    }

    public function getCorps() {
        return $this->corps;
    }

    public function getReponses() {
        return $this->reponses;
    }

    public function getExplications() {
        return $this->explications;
    }
}

?>