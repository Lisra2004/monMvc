<?php

namespace Model\Manager;


use Model\Db;

class PageOneManager
{
    /**
     * Find all objects & task on database
     * @return mixed
     */
    public function pageOneFindAll()
    {
        $sql = "SELECT objects.name, entities.text
                FROM objects
                INNER JOIN entities
                ON objects.id=entities.id_objects
                ORDER BY objects.name, entities.text";

        $dbh = Db::getDbh();

        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS);
        return $results;
    }

}