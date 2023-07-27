<?php
require_once('./utils/loadClass.php');

// On crée un nouvel objet Qcm vide
$qcm = new Qcm();

// On crée un nouvel objet Question, dont l'intitulé est "POO signifie :"
// -> cet intitulé est passé en paramètre du constructeur
$question1 = new Question('POO signifie :');

// On crée les réponses à notre question et on les ajoute dans le tableau de réponse de l'objet Question
// Sur le même procédé, on passe en paramètre de notre constructeur de Answer, leurs textes
$question1->addAnswer(new Answer('php Orienté objet'));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
// Si on précisé true en deuxieme paramètre, alors la réponse sera juste, sinon elle sera fausse par défaut
$question1->addAnswer(new Answer('Programmation Orientée Objet', true));
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));

// On écrit l'explication de la réponse à la question
$question1->setExplication('Sans commentaires si vous avez eu faux :-°');

// On ajoute notre question à notre qcm
$qcm->addQuestion($question1);



$question2 = new Question('qui était mozart ?');

$question2->addAnswer(new Answer('un boulanger'));
$question2->addAnswer(new Answer('un astre'));
$question2->addAnswer(new Answer('un compositeur/musicien', true));
$question2->addAnswer(new Answer('le bassiste de mickael jackson'));

$question2->setExplication('blablablabla');

$qcm->addQuestion($question2);

$qcm->generate();

?>