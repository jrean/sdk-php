<?php 
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 on 05/03/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

use JsonSerializable;

class CreateABookingRequest implements JsonSerializable {
    /**
     * One of Mr.|Ms.|Mrs.
     * @param string $salutation public property
     */
    protected $salutation;

    /**
     * Guest's first name
     * @param string $firstName public property
     */
    protected $firstName;

    /**
     * Guest's last name
     * @param string $lastName public property
     */
    protected $lastName;

    /**
     * Guest's email address
     * @param string $email public property
     */
    protected $email;

    /**
     * Guest's phone number
     * @param string $phone public property
     */
    protected $phone;

    /**
     * Message to the host
     * @param string $message public property
     */
    protected $message;

    /**
     * UUID of the ProductType
     * @param string $productTypeUuid public property
     */
    protected $productTypeUuid;

    /**
     * Number of adults
     * @param int $pax public property
     */
    protected $pax;

    /**
     * Number of children
     * @param int $children public property
     */
    protected $children;

    /**
     * Selected timeslot. If the product has timeslots, the "timeslotUUID" of the product is REQUIRED in "Check a Booking" and "Create a new booking" methods. Otherwise, it can be excluded
     * @param string $timeSlotUuid public property
     */
    protected $timeSlotUuid;

    /**
     * Add-ons for product (array of uuid/quantity values)
     * @param array $addons public property
     */
    protected $addons;

    /**
     * Arrival date in YYYY-MM-DD format
     * @param string $arrivalDate public property
     */
    protected $arrivalDate;

    /**
     * Maximum 36 characters partner reference code or number
     * @param string $partnerReference public property
     */
    protected $partnerReference;

    /**
     * f API should check price against "promotion" and not "regular" , default is set to "false"
     * @param bool $usePromotion public property
     */
    protected $usePromotion;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $salutation         Initialization value for the property $this->salutation      
	 * @param   string            $firstName          Initialization value for the property $this->firstName       
	 * @param   string            $lastName           Initialization value for the property $this->lastName        
	 * @param   string            $email              Initialization value for the property $this->email           
	 * @param   string            $phone              Initialization value for the property $this->phone           
	 * @param   string            $message            Initialization value for the property $this->message         
	 * @param   string            $productTypeUuid    Initialization value for the property $this->productTypeUuid 
	 * @param   int               $pax                Initialization value for the property $this->pax             
	 * @param   int               $children           Initialization value for the property $this->children        
	 * @param   string            $timeSlotUuid       Initialization value for the property $this->timeSlotUuid    
	 * @param   array             $addons             Initialization value for the property $this->addons          
	 * @param   string            $arrivalDate        Initialization value for the property $this->arrivalDate     
	 * @param   string            $partnerReference   Initialization value for the property $this->partnerReference
	 * @param   bool              $usePromotion       Initialization value for the property $this->usePromotion    
     */
    public function __construct()
    {
        if(14 == func_num_args())
        {
            $this->salutation       = func_get_arg(0);
            $this->firstName        = func_get_arg(1);
            $this->lastName         = func_get_arg(2);
            $this->email            = func_get_arg(3);
            $this->phone            = func_get_arg(4);
            $this->message          = func_get_arg(5);
            $this->productTypeUuid  = func_get_arg(6);
            $this->pax              = func_get_arg(7);
            $this->children         = func_get_arg(8);
            $this->timeSlotUuid     = func_get_arg(9);
            $this->addons           = func_get_arg(10);
            $this->arrivalDate      = func_get_arg(11);
            $this->partnerReference = func_get_arg(12);
            $this->usePromotion     = func_get_arg(13);
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
        $json['salutation']       = $this->salutation;
        $json['firstName']        = $this->firstName;
        $json['lastName']         = $this->lastName;
        $json['email']            = $this->email;
        $json['phone']            = $this->phone;
        $json['message']          = $this->message;
        $json['productTypeUuid']  = $this->productTypeUuid;
        $json['pax']              = $this->pax;
        $json['children']         = $this->children;
        $json['timeSlotUuid']     = $this->timeSlotUuid;
        $json['addons']           = $this->addons;
        $json['arrivalDate']      = $this->arrivalDate;
        $json['partnerReference'] = $this->partnerReference;
        $json['usePromotion']     = $this->usePromotion;
        return $json;
    }
}