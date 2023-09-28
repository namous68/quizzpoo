<?php

class Question
{
    private int $id_question;
    private string $question;
    private string $explanation;

    private array $answers;

    public function __construct(int $id_question, string $question, string $explanation, array $answers)
    {
        $this->setId_question($id_question);
        $this->setQuestion($question);
        $this->setExplanation($explanation);
        $this->setAnswers($answers);
    }



    /**
     * Set the value of explanation
     *
     * @return  self
     */
    public function setExplanation(string $explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Get the value of answers
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Add an answer to the question
     */
    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }





    /**
     * Get the value of id_question
     */
    public function getId_question()
    {
        return $this->id_question;
    }

    /**
     * Set the value of id_question
     *
     * @return  self
     */
    public function setId_question(int $id_question)
    {
        $this->id_question = $id_question;

        return $this;
    }

    /**
     * Get the value of explanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Set the value of answers
     *
     * @return  self
     */ 
    public function setAnswers(array $answers)
    {
        $this->answers = $answers;

        return $this;
    }
}
