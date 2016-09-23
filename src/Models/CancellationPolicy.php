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
class CancellationPolicy implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $numberOfDays public property
     */
    public $numberOfDays;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $refundPercentage public property
     */
    public $refundPercentage;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $numberOfDays       Initialization value for the property $this->numberOfDays    
     * @param   integer           $refundPercentage   Initialization value for the property $this->refundPercentage
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->numberOfDays     = func_get_arg(0);
            $this->refundPercentage = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['numberOfDays']     = $this->numberOfDays;
        $json['refundPercentage'] = $this->refundPercentage;

        return $json;
    }
}