<?php

namespace Model\Manager;

use Model\Db;
use Model\Entity\Object;
use PDO;

class ObjectManager
{


    /**
     * Save new Object on database (Objects table)
     */
	public function create(Object $object)
	{
        $sql = "INSERT INTO objects (id, type, x, y, width, height, userData, cssClass, bgColor, color, stroke, alpha, radius, name, angle, dasharray, gap, ports)
                VALUES (:id, :type, :x, :y, :width, :height, :userData, :cssClass, :bgColor, :color, :stroke, :alpha, :radius, :name, :angle, :dasharray, :gap, :ports)";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $object->getId());
        $stmt->bindValue(":type", $object->getType());
        $stmt->bindValue(":x", $object->getX());
        $stmt->bindValue(":y", $object->getY());
        $stmt->bindValue(":width", $object->getWidth());
        $stmt->bindValue(":height", $object->getHeight());
        $stmt->bindValue(":userData", $object->getUserData());
        $stmt->bindValue(":cssClass", $object->getCssClass());
        $stmt->bindValue(":bgColor", $object->getBgColor());
        $stmt->bindValue(":color", $object->getColor());
        $stmt->bindValue(":stroke", $object->getStroke());
        $stmt->bindValue(":alpha", $object->getAlpha());
        $stmt->bindValue(":radius", $object->getRadius());
        $stmt->bindValue(":name", $object->getName());
        $stmt->bindValue(":angle", $object->getAngle());
        $stmt->bindValue(":dasharray", $object->getDasharray());
        $stmt->bindValue(":gap", $object->getGap());
        $stmt->bindValue(":ports", $object->getPorts());
        return $stmt->execute();
	}

    /**
     * Find one object by id on Objects table
     */
	public function hasId($id)
	{
        $sql = "SELECT count(*) as cpt
                FROM objects
                WHERE id= :id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result['cpt'] != 0;
	}

    /**
     * Find all object on Objects table
     */
	public function findAll()
	{
        $sql = "SELECT * 
                FROM objects
                ORDER BY name";

        $dbh = Db::getDbh();

        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Object');

        return $results;
	}

    /**
     * Update Objects table
     */
    public function updateValue(Object $object){
        $sql = 'UPDATE objects SET type=:type, x=:x, y=:y, width=:width, height=:height, userData=:userData, cssClass=:cssClass, color=:color, stroke=:stroke, alpha=:alpha, radius=:radius, name=:name, angle=:angle, dasharray=:dasharray, gap=:gap, ports=:ports 
                WHERE id=:id';

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $object->getId());
        $stmt->bindValue(":type", $object->getType());
        $stmt->bindValue(":x", $object->getX());
        $stmt->bindValue(":y", $object->getY());
        $stmt->bindValue(":width", $object->getWidth());
        $stmt->bindValue(":height", $object->getHeight());
        $stmt->bindValue(":userData", $object->getUserData());
        $stmt->bindValue(":cssClass", $object->getCssClass());
//        $stmt->bindValue(":bgColor", $object->getBgColor());
        $stmt->bindValue(":color", $object->getColor());
        $stmt->bindValue(":stroke", $object->getStroke());
        $stmt->bindValue(":alpha", $object->getAlpha());
        $stmt->bindValue(":radius", $object->getRadius());
        $stmt->bindValue(":name", $object->getName());
        $stmt->bindValue(":angle", $object->getAngle());
        $stmt->bindValue(":dasharray", $object->getDasharray());
        $stmt->bindValue(":gap", $object->getGap());
        $stmt->bindValue(":ports", $object->getPorts());
        return $stmt->execute();
    }

    /**
     * Delete Object on Objects table
     */
    public function deleteObject($id){

        $sql = "DELETE FROM objects WHERE id = :id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
        //TODO success message delete object
    }



    /**
     * reset objects table
     */
    public function resetObjects(){
        $sql = "DELETE FROM objects ";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

    }

    /**
     * Find all object on Objects table
     */
    public function prepareJsonObjects()
    {
        $sql = "SELECT objects.id, objects.type, objects.x, objects.y, objects.width, objects.height, objects.userData, objects.cssClass, objects.bgColor, objects.color,
                objects.stroke, objects.alpha, objects.radius, objects.name, objects.ports, objects.dasharray, objects.angle, objects.angle, objects.gap 
                FROM objects
                ORDER BY name";

        $dbh = Db::getDbh();

        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Object');

        return $results;
    }


}