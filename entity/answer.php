<?php

class Answer
{
    private int $id_answer;
    private string $answer;
    private bool $isCorrect;

    public function __construct(int $id_answer, string $answer, bool $isCorrect = false)
    {
        $this->setId_answer($id_answer);
        $this->setAnswer($answer);
        $this->setIsCorrect($isCorrect);  
    }

    /**
     * Set the value of isCorrect
     *
     * @return  self
     */ 
    public function setIsCorrect(bool $isCorrect)
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    /**
     * Set the value of answer
     *
     * @return  self
     */ 
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get the value of answer
     */ 
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Get the value of id_answer
     */ 
    public function getId_answer()
    {
        return $this->id_answer;
    }

    /**
     * Set the value of id_answer
     *
     * @return  self
     */ 
    public function setId_answer($id_answer)
    {
        $this->id_answer = $id_answer;

        return $this;
    }

    /**
     * Get the value of isCorrect
     */ 
    public function getIsCorrect()
    {
        return $this->isCorrect;
    }
}
