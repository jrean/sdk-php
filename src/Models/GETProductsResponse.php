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
class GETProductsResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var Product[] $data public property
     */
    public $data;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $meta public property
     */
    public $meta;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $data   Initialization value for the property $this->data
     * @param   array             $meta   Initialization value for the property $this->meta
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->data = func_get_arg(0);
            $this->meta = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data'] = $this->data;
        $json['meta'] = $this->meta;

        return $json;
    }
}