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
class CheckABookingResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var array $data public property
     */
    public $data;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $data   Initialization value for the property $this->data
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->data = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data'] = $this->data;

        return $json;
    }
}