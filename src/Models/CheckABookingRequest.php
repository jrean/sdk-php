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
class CheckABookingRequest implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var array $addons public property
     */
    public $addons;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $arrivalDate public property
     */
    public $arrivalDate;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $children public property
     */
    public $children;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $pax public property
     */
    public $pax;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $productTypeUuid public property
     */
    public $productTypeUuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $timeSlotUuid public property
     */
    public $timeSlotUuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $usePromotion public property
     */
    public $usePromotion;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $addons            Initialization value for the property $this->addons         
     * @param   string            $arrivalDate       Initialization value for the property $this->arrivalDate    
     * @param   integer           $children          Initialization value for the property $this->children       
     * @param   integer           $pax               Initialization value for the property $this->pax            
     * @param   string            $productTypeUuid   Initialization value for the property $this->productTypeUuid
     * @param   string            $timeSlotUuid      Initialization value for the property $this->timeSlotUuid   
     * @param   bool              $usePromotion      Initialization value for the property $this->usePromotion   
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->addons          = func_get_arg(0);
            $this->arrivalDate     = func_get_arg(1);
            $this->children        = func_get_arg(2);
            $this->pax             = func_get_arg(3);
            $this->productTypeUuid = func_get_arg(4);
            $this->timeSlotUuid    = func_get_arg(5);
            $this->usePromotion    = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['addons']          = $this->addons;
        $json['arrivalDate']     = $this->arrivalDate;
        $json['children']        = $this->children;
        $json['pax']             = $this->pax;
        $json['productTypeUuid'] = $this->productTypeUuid;
        $json['timeSlotUuid']    = $this->timeSlotUuid;
        $json['usePromotion']    = $this->usePromotion;

        return $json;
    }
}