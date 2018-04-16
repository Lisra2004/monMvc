<?php

namespace Model\Entity;


class Faq extends AbstractEntity
{
    private $id;
    private $subject;
    private $question;
    private $answer;

    private $validationErrors = [];

    public function isValid()
    {
        $isValid = true;

        if (empty($this->question)){
            $isValid = false;
            $this->validationErrors[] = "Veuillez poser votre question !";
        }

        return $isValid;
    }

    //getter pour les erreurs de validation
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }


    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }



    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }



}