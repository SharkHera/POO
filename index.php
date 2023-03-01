<?php

require_once("class\class-answer.php");
require_once("class\class-question.php");
require_once("class\class-qcm.php");


$qcm = new Qcm();
$question1 = new Question('POO signifie :');
$question1->addAnswer(new Answer('Php Orienté Objet'));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
$question1->setExplications('Si vous avez eu faux, changez de formation');
$qcm->addQuestion($question1);
$question2 = new Question('Quel est la capital du Congo ? :');
$question2->addAnswer(new Answer('OUI'));
$question2->addAnswer(new Answer('Mais Oui Cest clair'));
$question2->addAnswer(new Answer('La Mer Noire', Answer::BONNE_REPONSE));
$question2->addAnswer(new Answer('La réponse D'));
$question2->setExplications('Le Con go est un pays fictif');
$qcm->addQuestion($question2);
$qcm->generate();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\custom.css">
    <title>Document</title>
</head>
<body>
    <div class="carre">
        
    </div>

    
</body>
</html>