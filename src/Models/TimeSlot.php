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
class TimeSlot implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $endTime public property
     */
    public $endTime;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $startTime public property
     */
    public $startTime;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $uuid public property
     */
    public $uuid;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $endTime     Initialization value for the property $this->endTime  
     * @param   string            $startTime   Initialization value for the property $this->startTime
     * @param   string            $uuid        Initialization value for the property $this->uuid     
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->endTime   = func_get_arg(0);
            $this->startTime = func_get_arg(1);
            $this->uuid      = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['endTime']   = $this->endTime;
        $json['startTime'] = $this->startTime;
        $json['uuid']      = $this->uuid;

        return $json;
    }
}