<?php

class Qcm
{
    private array $questions;
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    /**
     * Get the value of questions
     */ 
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add a question to the quiz
     */ 
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }


    

    /**
     * Get the value of db
     */ 
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */ 
    public function setDb(PDO $db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Generate the view of the quiz
     */
    public function generate()
    {
        foreach($this->getQuestions() as $question){
            echo $question->getQuestion() . '<br><br>';

            foreach($question->getAnswers() as $answer){
                echo '- ' . $answer->getAnswer() . '<br>';
            }

            echo '<br><br>';
        }
    }
  

    public function selectQuestions()
    {
        $query = 'SELECT * FROM questions';
        $result = $this->getDb()->query($query);
        $questionsData = $result->fetchAll();
        $allQuestions = [];

        foreach($questionsData as $questionData){
            $query = 'SELECT * FROM answers WHERE id_question = :id_question';
            $result = $this->getDb()->prepare($query);
            $result->execute([
                ':id_question' => $questionData['id_question']
            ]);
            $answersData = $result->fetchAll(PDO::FETCH_ASSOC);
            $allQuestions[] = $this->createQuestionsAndAnswers($questionData, $answersData);
        }

        $this->setQuestions($allQuestions);
    }

    private function createQuestionsAndAnswers(array $questionData, array $answersData)
    {
        $answers = [];

        foreach($answersData as $answerData){
            $answers[] = new Answer($answerData['id_answer'], $answerData['answer'], $answerData['isCorrect']);
        }

        $question = new Question($questionData['id_question'], $questionData['question'], $questionData['explanation'], $answers);

        return $question;
    }

    /**
     * Set the value of questions
     *
     * @return  self
     */ 
    public function setQuestions(array $questions)
    {
        $this->questions = $questions;

        return $this;
    }
}
