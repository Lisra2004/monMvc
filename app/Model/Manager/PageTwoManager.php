<?php

namespace Model\Manager;

use Model\Db;

class PageTwoManager
{
    public function pageTwoFindAll()
    {
        $sql = "SELECT objects.id, objects.name, entities.text
                FROM objects
                INNER JOIN entities
                ON objects.id=entities.id_objects
                ORDER BY objects.id";

        $dbh = Db::getDbh();

        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS);
        return $results;

    }

}