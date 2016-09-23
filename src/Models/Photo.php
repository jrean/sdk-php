<?php 
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Photo implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $caption public property
     */
    public $caption;

    /**
     * @todo Write general description for this property
     * @required
     * @var PhotoPaths $paths public property
     */
    public $paths;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $uuid public property
     */
    public $uuid;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $caption   Initialization value for the property $this->caption
     * @param   PhotoPaths        $paths     Initialization value for the property $this->paths  
     * @param   string            $uuid      Initialization value for the property $this->uuid   
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->caption = func_get_arg(0);
            $this->paths   = func_get_arg(1);
            $this->uuid    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['caption'] = $this->caption;
        $json['paths']   = $this->paths;
        $json['uuid']    = $this->uuid;

        return $json;
    }
}