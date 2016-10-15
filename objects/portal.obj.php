<?php
/**
 * Created by PhpStorm.
 * User: Ishmael
 * Date: 7/23/2016
 * Time: 1:54 PM
 */

/**
 * Class portal
 * File breakdown
 * 0 - Entity type (p is portal)
 * 1 - Entity alliance (R for resistance, E for enlightened)
 * 2 - Latitude (in INT)
 * 3 - Longitude (in INT)
 * 4 -
 * 5 -
 * 6 -
 * 7 - url to image of portal
 * 8 - Portal name
 *
 */
class portal {
    public $type;
    public $latitude;
    public $longitude;
    public $url;
    public $name;

    public function __construct($arr)
    {
        if(is_array($arr)){
            $this->type = $arr[0] ?? "";
            if($this->type == "p"){
                $this->latitude = $arr[2] ?? "";
                $this->longitude = $arr[3] ?? "";
                $this->url = $arr[7] ?? "";
                $this->name = $arr[8] ?? "undefined";
            }
        }
    }
}