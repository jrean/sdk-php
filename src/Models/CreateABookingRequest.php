<?php 
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

use JsonSerializable;

/**
 * Request structure for the createABooking endpoint
 */
class CreateABookingRequest implements JsonSerializable {
    /**
     * Add-ons for product (array of uuid/quantity values)
     * @required
     * @var array $addons public property
     */
    public $addons;

    /**
     * Arrival date in YYYY-MM-DD format
     * @required
     * @var string $arrivalDate public property
     */
    public $arrivalDate;

    /**
     * Number of children
     * @required
     * @var integer $children public property
     */
    public $children;

    /**
     * Guest's email address
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * Guest's first name
     * @required
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * Flight arrival date time (YYYY-MM-DD HH:MM) for pickup/dropoff
     * @required
     * @var string $flightDateTime public property
     */
    public $flightDateTime;

    /**
     * Flight destination airport IATA code for pickup/dropoff
     * @required
     * @var string $flightDestination public property
     */
    public $flightDestination;

    /**
     * Flight number for pickup/dropoff
     * @required
     * @var string $flightNumber public property
     */
    public $flightNumber;

    /**
     * Address of the hotel for pickup/dropoff
     * @required
     * @var string $hotelAddress public property
     */
    public $hotelAddress;

    /**
     * Name of the hotel for pickup/dropoff
     * @required
     * @var string $hotelName public property
     */
    public $hotelName;

    /**
     * Guest's last name
     * @required
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * Message to the host
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * Maximum 36 characters partner reference code or number
     * @required
     * @var string $partnerReference public property
     */
    public $partnerReference;

    /**
     * Number of adults
     * @required
     * @var integer $pax public property
     */
    public $pax;

    /**
     * Guest's phone number
     * @required
     * @var string $phone public property
     */
    public $phone;

    /**
     * UUID of the ProductType
     * @required
     * @var string $productTypeUuid public property
     */
    public $productTypeUuid;

    /**
     * One of Mr.|Ms.|Mrs.
     * @required
     * @var string $salutation public property
     */
    public $salutation;

    /**
     * Selected timeslot. If the product has timeslots, the "timeslotUUID" of the product is REQUIRED in "Check a Booking" and "Create a new booking" methods. Otherwise, it can be excluded
     * @required
     * @var string $timeSlotUuid public property
     */
    public $timeSlotUuid;

    /**
     * f API should check price against "promotion" and not "regular" , default is set to "false"
     * @required
     * @var bool $usePromotion public property
     */
    public $usePromotion;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $addons              Initialization value for the property $this->addons           
     * @param   string            $arrivalDate         Initialization value for the property $this->arrivalDate      
     * @param   integer           $children            Initialization value for the property $this->children         
     * @param   string            $email               Initialization value for the property $this->email            
     * @param   string            $firstName           Initialization value for the property $this->firstName        
     * @param   string            $flightDateTime      Initialization value for the property $this->flightDateTime   
     * @param   string            $flightDestination   Initialization value for the property $this->flightDestination
     * @param   string            $flightNumber        Initialization value for the property $this->flightNumber     
     * @param   string            $hotelAddress        Initialization value for the property $this->hotelAddress     
     * @param   string            $hotelName           Initialization value for the property $this->hotelName        
     * @param   string            $lastName            Initialization value for the property $this->lastName         
     * @param   string            $message             Initialization value for the property $this->message          
     * @param   string            $partnerReference    Initialization value for the property $this->partnerReference 
     * @param   integer           $pax                 Initialization value for the property $this->pax              
     * @param   string            $phone               Initialization value for the property $this->phone            
     * @param   string            $productTypeUuid     Initialization value for the property $this->productTypeUuid  
     * @param   string            $salutation          Initialization value for the property $this->salutation       
     * @param   string            $timeSlotUuid        Initialization value for the property $this->timeSlotUuid     
     * @param   bool              $usePromotion        Initialization value for the property $this->usePromotion     
     */
    public function __construct()
    {
        if(19 == func_num_args())
        {
            $this->addons            = func_get_arg(0);
            $this->arrivalDate       = func_get_arg(1);
            $this->children          = func_get_arg(2);
            $this->email             = func_get_arg(3);
            $this->firstName         = func_get_arg(4);
            $this->flightDateTime    = func_get_arg(5);
            $this->flightDestination = func_get_arg(6);
            $this->flightNumber      = func_get_arg(7);
            $this->hotelAddress      = func_get_arg(8);
            $this->hotelName         = func_get_arg(9);
            $this->lastName          = func_get_arg(10);
            $this->message           = func_get_arg(11);
            $this->partnerReference  = func_get_arg(12);
            $this->pax               = func_get_arg(13);
            $this->phone             = func_get_arg(14);
            $this->productTypeUuid   = func_get_arg(15);
            $this->salutation        = func_get_arg(16);
            $this->timeSlotUuid      = func_get_arg(17);
            $this->usePromotion      = func_get_arg(18);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['addons']            = $this->addons;
        $json['arrivalDate']       = $this->arrivalDate;
        $json['children']          = $this->children;
        $json['email']             = $this->email;
        $json['firstName']         = $this->firstName;
        $json['flightDateTime']    = $this->flightDateTime;
        $json['flightDestination'] = $this->flightDestination;
        $json['flightNumber']      = $this->flightNumber;
        $json['hotelAddress']      = $this->hotelAddress;
        $json['hotelName']         = $this->hotelName;
        $json['lastName']          = $this->lastName;
        $json['message']           = $this->message;
        $json['partnerReference']  = $this->partnerReference;
        $json['pax']               = $this->pax;
        $json['phone']             = $this->phone;
        $json['productTypeUuid']   = $this->productTypeUuid;
        $json['salutation']        = $this->salutation;
        $json['timeSlotUuid']      = $this->timeSlotUuid;
        $json['usePromotion']      = $this->usePromotion;

        return $json;
    }
}