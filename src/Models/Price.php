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
class Price implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var Promotion $promotion public property
     */
    public $promotion;

    /**
     * @todo Write general description for this property
     * @required
     * @var PriceSet $regular public property
     */
    public $regular;

    /**
     * Constructor to set initial or default values of member properties
     * @param   Promotion         $promotion   Initialization value for the property $this->promotion
     * @param   PriceSet          $regular     Initialization value for the property $this->regular  
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->promotion = func_get_arg(0);
            $this->regular   = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['promotion'] = $this->promotion;
        $json['regular']   = $this->regular;

        return $json;
    }
}