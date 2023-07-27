<?php

class Qcm
{
    private array $questions=[];

    /**
     * Get the value of questions
     */ 
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add a question to the array of Question $questions
     */
    public function addQuestion(Question $question){
       $this->questions[] = $question;
    }

    /**
     * Generate a view for the qcm
     */
    public function generate()
    {
        foreach($this->getQuestions() as $question){
            echo $question->getTexteQuestion();
            echo '<br><br>';

            foreach($question->getAnswers() as $answer){
                echo '- ' . $answer->getTexteReponse();
                echo '<br>';
            }

            echo '<br><br>';
        }
    }

}
