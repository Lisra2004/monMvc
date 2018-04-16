<?php
//TODO

namespace Model\Entity;


class Task
{
    private $id;
    private $text;
    private $id_objects;

    private $validationErrors = [];

    public function isValid()
    {
        $isValid = true;

        if (empty($this->text)){
            $isValid = false;
            $this->validationErrors[] = "Veuillez renseigner une tache !";
        }

        return $isValid;
    }

    /**
     * Getter for validation errors
     * @return array
     */
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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getIdObjects()
    {
        return $this->id_objects;
    }

    /**
     * @param mixed $id_objects
     */
    public function setIdObjects($id_objects)
    {
        $this->id_objects = $id_objects;
    }


    /**
     * Transform information in array to make json
     * @return array
     */
    public function toArray()
    {
        $arrayTask = [];
        foreach ($this as $attr => $value){
            if (in_array($attr, ['id_objects', 'validationErrors'])){
                continue;
            }
            $arrayTask[$attr] = $value;
        }
        return $arrayTask;
    }

}