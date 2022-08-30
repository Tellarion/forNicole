<?php

interface IObjectsItter {
    public function handleObjects();
}

class ObjectsItter implements IObjectsItter {

    protected $objects = [];
    protected $handleObjects = [];
    
    public function __construct($objects) {
        $this->objects = $objects;
    }

    public function handleObjects() {
        foreach($objects as $object) {
            $this->handleObjects[] = (object) $object;
        }
        return $this->handleObjects;
    }

}

$soh = new ObjectsItter();
$soh->handleObjects(array("object_1", "object_2"));