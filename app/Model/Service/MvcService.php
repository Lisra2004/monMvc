<?php
namespace Model\Service;


use Model\Manager\ObjectManager;
use Model\Manager\TaskManager;

class MvcService
{

    /**
     * Load database and construct json file
     * @return mixed
     */
    public function load()
    {
        $objectManager = new ObjectManager();
        $objects = $objectManager->prepareJsonObjects();

        $jsonTab = [];
        foreach ($objects as $object) {
            $taskManager = new TaskManager();
            $tasks = $taskManager->prepareJsonTask($object->getId());
            $object->entities = $tasks;
            $jsonTab[] = $object->toArray();
//            var_dump($object);
        }

        $startJson = 'let jsonDocument = ';

        $spaceEnv = json_encode($jsonTab, JSON_PRETTY_PRINT);
//        echo '<pre>' . print_r($spaceEnv, true) ;
        $spaceJson = 'public/uploads/dbJson.json';
        $jsonFile = fopen($spaceJson, 'w+');
        fwrite($jsonFile, $startJson);
        fwrite($jsonFile, $spaceEnv);
        fclose($jsonFile);
    }

}