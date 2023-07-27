<?php
class Answer
{
    private string $texteReponse;
    private bool $isCorrect;


    // Ici nous disons que si aucune valeur n'est passé en paramètre pour 
    // isCorrect alors il sera false par défaut
    public function __construct(string $texteReponse, bool $isCorrect = false)
    {
        $this->setTexteReponse($texteReponse);
        $this->setIsCorrect($isCorrect);
    }

    /**
     * Set the value of texteReponse
     *
     * @return  self
     */ 
    public function setTexteReponse(string $texteReponse)
    {
        $this->texteReponse = $texteReponse;

        return $this;
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
     * Get the value of texteReponse
     */ 
    public function getTexteReponse()
    {
        return $this->texteReponse;
    }
}