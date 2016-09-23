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
class Promotion implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var object $adult public property
     */
    public $adult;

    /**
     * @todo Write general description for this property
     * @required
     * @var CancellationPolicy[] $cancellationPolicy public property
     */
    public $cancellationPolicy;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $child public property
     */
    public $child;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $discountPercent public property
     */
    public $discountPercent;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var integer $daysInAdvance public property
     */
    public $daysInAdvance;

    /**
     * @todo Write general description for this property
     * @var integer $hoursInAdvance public property
     */
    public $hoursInAdvance;

    /**
     * Constructor to set initial or default values of member properties
     * @param   object            $adult                Initialization value for the property $this->adult             
     * @param   array             $cancellationPolicy   Initialization value for the property $this->cancellationPolicy
     * @param   integer           $child                Initialization value for the property $this->child             
     * @param   integer           $discountPercent      Initialization value for the property $this->discountPercent   
     * @param   string            $name                 Initialization value for the property $this->name              
     * @param   string            $type                 Initialization value for the property $this->type              
     * @param   integer           $daysInAdvance        Initialization value for the property $this->daysInAdvance     
     * @param   integer           $hoursInAdvance       Initialization value for the property $this->hoursInAdvance    
     */
    public function __construct()
    {
        if(8 == func_num_args())
        {
            $this->adult              = func_get_arg(0);
            $this->cancellationPolicy = func_get_arg(1);
            $this->child              = func_get_arg(2);
            $this->discountPercent    = func_get_arg(3);
            $this->name               = func_get_arg(4);
            $this->type               = func_get_arg(5);
            $this->daysInAdvance      = func_get_arg(6);
            $this->hoursInAdvance     = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['adult']              = $this->adult;
        $json['cancellationPolicy'] = $this->cancellationPolicy;
        $json['child']              = $this->child;
        $json['discountPercent']    = $this->discountPercent;
        $json['name']               = $this->name;
        $json['type']               = $this->type;
        $json['daysInAdvance']      = $this->daysInAdvance;
        $json['hoursInAdvance']     = $this->hoursInAdvance;

        return $json;
    }
}