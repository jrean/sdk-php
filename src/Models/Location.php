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
class Location implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $cityUuid public property
     */
    public $cityUuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $countryUuid public property
     */
    public $countryUuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $stateUuid public property
     */
    public $stateUuid;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $city          Initialization value for the property $this->city       
     * @param   string            $cityUuid      Initialization value for the property $this->cityUuid   
     * @param   string            $country       Initialization value for the property $this->country    
     * @param   string            $countryUuid   Initialization value for the property $this->countryUuid
     * @param   string            $state         Initialization value for the property $this->state      
     * @param   string            $stateUuid     Initialization value for the property $this->stateUuid  
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->city        = func_get_arg(0);
            $this->cityUuid    = func_get_arg(1);
            $this->country     = func_get_arg(2);
            $this->countryUuid = func_get_arg(3);
            $this->state       = func_get_arg(4);
            $this->stateUuid   = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['city']        = $this->city;
        $json['cityUuid']    = $this->cityUuid;
        $json['country']     = $this->country;
        $json['countryUuid'] = $this->countryUuid;
        $json['state']       = $this->state;
        $json['stateUuid']   = $this->stateUuid;

        return $json;
    }
}