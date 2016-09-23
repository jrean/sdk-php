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
class GetBookingsResponse extends BaseResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var object $meta public property
     */
    public $meta;

    /**
     * Constructor to set initial or default values of member properties
     * @param   object            $meta   Initialization value for the property $this->meta
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->meta = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['meta'] = $this->meta;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}