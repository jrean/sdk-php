<?php 
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 on 05/03/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

use JsonSerializable;

class CheckABookingRequest implements JsonSerializable {
    /**
     * TODO: Write general description for this property
     * @param string $productTypeUuid public property
     */
    protected $productTypeUuid;

    /**
     * TODO: Write general description for this property
     * @param int $pax public property
     */
    protected $pax;

    /**
     * TODO: Write general description for this property
     * @param int $children public property
     */
    protected $children;

    /**
     * TODO: Write general description for this property
     * @param string $timeSlotUuid public property
     */
    protected $timeSlotUuid;

    /**
     * TODO: Write general description for this property
     * @param array $addons public property
     */
    protected $addons;

    /**
     * TODO: Write general description for this property
     * @param string $arrivalDate public property
     */
    protected $arrivalDate;

    /**
     * TODO: Write general description for this property
     * @param bool $usePromotion public property
     */
    protected $usePromotion;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $productTypeUuid   Initialization value for the property $this->productTypeUuid
	 * @param   int               $pax               Initialization value for the property $this->pax            
	 * @param   int               $children          Initialization value for the property $this->children       
	 * @param   string            $timeSlotUuid      Initialization value for the property $this->timeSlotUuid   
	 * @param   array             $addons            Initialization value for the property $this->addons         
	 * @param   string            $arrivalDate       Initialization value for the property $this->arrivalDate    
	 * @param   bool              $usePromotion      Initialization value for the property $this->usePromotion   
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->productTypeUuid = func_get_arg(0);
            $this->pax             = func_get_arg(1);
            $this->children        = func_get_arg(2);
            $this->timeSlotUuid    = func_get_arg(3);
            $this->addons          = func_get_arg(4);
            $this->arrivalDate     = func_get_arg(5);
            $this->usePromotion    = func_get_arg(6);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['productTypeUuid'] = $this->productTypeUuid;
        $json['pax']             = $this->pax;
        $json['children']        = $this->children;
        $json['timeSlotUuid']    = $this->timeSlotUuid;
        $json['addons']          = $this->addons;
        $json['arrivalDate']     = $this->arrivalDate;
        $json['usePromotion']    = $this->usePromotion;
        return $json;
    }
}