<?php

class Question
{
    private string $texteQuestion;
    private array $answers = [];
    private string $explication;

    public function __construct(string $texteQuestion)
    {
        $this->setTexteQuestion($texteQuestion);
    }

    /**
     * Set the value of explication
     *
     * @return  self
     */ 
    public function setExplication(string $explication)
    {
        $this->explication = $explication;

        return $this;
    }

    /**
     * Set the value of texteQuestion
     *
     * @return  self
     */ 
    public function setTexteQuestion(string $texteQuestion)
    {
        $this->texteQuestion = $texteQuestion;

        return $this;
    }

    /**
     * Get the value of texteQuestion
     */ 
    public function getTexteQuestion()
    {
        return $this->texteQuestion;
    }
    
    /**
     * Get the value of answers
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }


    /**
     * Add an answer to the array of Answer $answers
     */
    public function addAnswer (Answer $answer){
        $this->answers[] = $answer;
    }

    

    
}