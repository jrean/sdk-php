<?php 
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

use JsonSerializable;

/**
 * Price currency model
 */
class Currency implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $symbol public property
     */
    public $symbol;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $uuid public property
     */
    public $uuid;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $code     Initialization value for the property $this->code  
     * @param   string            $symbol   Initialization value for the property $this->symbol
     * @param   string            $uuid     Initialization value for the property $this->uuid  
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->code   = func_get_arg(0);
            $this->symbol = func_get_arg(1);
            $this->uuid   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']   = $this->code;
        $json['symbol'] = $this->symbol;
        $json['uuid']   = $this->uuid;

        return $json;
    }
}