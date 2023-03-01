<?php

// Classe Qcm
class Qcm {
    private $questions = array();

    public function addQuestion(Question $question) {
        $this->questions[] = $question;
    }

    public function generate() {
        // affichage du formulaire pour chaque question
        foreach ($this->questions as $question) {
            echo '<p>' . $question->getCorps() . '</p>';
            echo '<ul>';
            foreach ($question->getReponses() as $reponse) {
                echo '<li>';
                if ($reponse->estBonneReponse()) {
                    echo '<strong>';
                }
                echo $reponse->getTexte();
                if ($reponse->estBonneReponse()) {
                    echo '</strong>';
                }
                echo '</li>';
            }
            echo '</ul>';
            echo '<p>' . $question->getExplications() . '</p>';
        }
    }
}
?>