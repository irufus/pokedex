<?php
/**
 * Created by PhpStorm.
 * User: Ishmael
 * Date: 7/23/2016
 * Time: 2:20 PM
 */

/**
 * Class entity
 * Represents a game entity
 * 0 - Unique identifier???
 * 1 - ???
 * 2 - Portal object (portal.obj.php)
 * 3 -
 */
class entity{
    private $id;
    private $portal;

    public function __construct($entity){
        $this->id = $entity[0] ?? "";
    }

    public function setID($entity){
        $this->id = $entity[0] ?? "";
    }
}