<?php

namespace Model\Manager;


use Model\Db;
use Model\Entity\Task;

class TaskManager
{
    /**
     * Save new task/entitie on database (entities table)
     */
    public function createEntitie(Task $text)
    {
        $sql = "INSERT INTO entities (id, text, id_objects)
                VALUES (:id, :text, :id_objects)";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $text->getId());
        $stmt->bindValue(":text", $text->getText());
        $stmt->bindValue(":id_objects", $text->getIdObjects());
        return $stmt->execute();
    }

    /**
     * Update text on Task table
     */
    public function updateValueTask(Task $text){
        $sql = 'UPDATE entities SET text=:text WHERE id = :id';
        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $text->getId());
        $stmt->bindValue(":text", $text->getText());
        return $stmt->execute();

    }

    /**
     * Find all id task on entities table
     */
    public function findAllIdTask()
    {
        $sql = 'SELECT id, text, id_objects
                FROM entities';
        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Task');

        return $results;
    }

    /**
     * Find one text by id on entities table
     */
    public function hasIdTask($id)
    {
        $sql = "SELECT count(*) as cpt
                FROM entities
                WHERE id= :id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result['cpt'] != 0;
    }

    /**
     * Delete text on Entities table
     */
    public function deleteTask($id){
        $sql = "DELETE FROM entities WHERE id = :id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();

    }

    /**
     * Delete text on Entities table by Object
     */
    public function deleteTaskByObject($id_objects){
        $sql = "DELETE FROM entities WHERE id_objects = :id_objects";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id_objects", $id_objects);
        return $stmt->execute();

    }

    /**
     * Find all text
     * @return mixed
     */
    public function findAllTask(){
        $sql = "SELECT text
                FROM entities
                INNER JOIN objects
                ON entities.id_objects=objects.id
                ORDER BY objects.name";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Task');

        return $results;
    }

    /**
     * reset entities table
     */
    public function resetEntities(){
        $sql = "TRUNCATE TABLE `entities`";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

    }

    public function prepareJsonTask($id){
        $sql = "SELECT entities.id, entities.text
                FROM entities
                INNER JOIN objects
                ON entities.id_objects=objects.id
                WHERE entities.id_objects = :id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Task');

        return $results;
    }

}