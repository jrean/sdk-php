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
class ProductType implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var bool $allowChildren public property
     */
    public $allowChildren;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $daysInAdvance public property
     */
    public $daysInAdvance;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $descriptionTranslated public property
     */
    public $descriptionTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $durationDays public property
     */
    public $durationDays;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $durationHours public property
     */
    public $durationHours;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $durationMinutes public property
     */
    public $durationMinutes;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $hasChildPrice public property
     */
    public $hasChildPrice;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $instantConfirmation public property
     */
    public $instantConfirmation;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $isNonRefundable public property
     */
    public $isNonRefundable;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $maxAdultAge public property
     */
    public $maxAdultAge;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $maxChildAge public property
     */
    public $maxChildAge;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $minAdultAge public property
     */
    public $minAdultAge;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $minChildAge public property
     */
    public $minChildAge;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $paxMax public property
     */
    public $paxMax;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $paxMin public property
     */
    public $paxMin;

    /**
     * @todo Write general description for this property
     * @required
     * @var object $prices public property
     */
    public $prices;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $recommendedMarkup public property
     */
    public $recommendedMarkup;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $titleTranslated public property
     */
    public $titleTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $uuid public property
     */
    public $uuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $voucherRedemptionAddress public property
     */
    public $voucherRedemptionAddress;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $voucherRedemptionAddressTranslated public property
     */
    public $voucherRedemptionAddressTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $voucherUse public property
     */
    public $voucherUse;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $voucherUseTranslated public property
     */
    public $voucherUseTranslated;

    /**
     * @todo Write general description for this property
     * @var TimeSlot[] $timeSlots public property
     */
    public $timeSlots;

    /**
     * Constructor to set initial or default values of member properties
     * @param   bool              $allowChildren                        Initialization value for the property $this->allowChildren                     
     * @param   integer           $daysInAdvance                        Initialization value for the property $this->daysInAdvance                     
     * @param   string            $description                          Initialization value for the property $this->description                       
     * @param   string            $descriptionTranslated                Initialization value for the property $this->descriptionTranslated             
     * @param   integer           $durationDays                         Initialization value for the property $this->durationDays                      
     * @param   integer           $durationHours                        Initialization value for the property $this->durationHours                     
     * @param   integer           $durationMinutes                      Initialization value for the property $this->durationMinutes                   
     * @param   bool              $hasChildPrice                        Initialization value for the property $this->hasChildPrice                     
     * @param   bool              $instantConfirmation                  Initialization value for the property $this->instantConfirmation               
     * @param   bool              $isNonRefundable                      Initialization value for the property $this->isNonRefundable                   
     * @param   integer           $maxAdultAge                          Initialization value for the property $this->maxAdultAge                       
     * @param   string            $maxChildAge                          Initialization value for the property $this->maxChildAge                       
     * @param   integer           $minAdultAge                          Initialization value for the property $this->minAdultAge                       
     * @param   string            $minChildAge                          Initialization value for the property $this->minChildAge                       
     * @param   integer           $paxMax                               Initialization value for the property $this->paxMax                            
     * @param   integer           $paxMin                               Initialization value for the property $this->paxMin                            
     * @param   object            $prices                               Initialization value for the property $this->prices                            
     * @param   double            $recommendedMarkup                    Initialization value for the property $this->recommendedMarkup                 
     * @param   string            $title                                Initialization value for the property $this->title                             
     * @param   string            $titleTranslated                      Initialization value for the property $this->titleTranslated                   
     * @param   string            $uuid                                 Initialization value for the property $this->uuid                              
     * @param   string            $voucherRedemptionAddress             Initialization value for the property $this->voucherRedemptionAddress          
     * @param   string            $voucherRedemptionAddressTranslated   Initialization value for the property $this->voucherRedemptionAddressTranslated
     * @param   string            $voucherUse                           Initialization value for the property $this->voucherUse                        
     * @param   string            $voucherUseTranslated                 Initialization value for the property $this->voucherUseTranslated              
     * @param   array             $timeSlots                            Initialization value for the property $this->timeSlots                         
     */
    public function __construct()
    {
        if(26 == func_num_args())
        {
            $this->allowChildren                      = func_get_arg(0);
            $this->daysInAdvance                      = func_get_arg(1);
            $this->description                        = func_get_arg(2);
            $this->descriptionTranslated              = func_get_arg(3);
            $this->durationDays                       = func_get_arg(4);
            $this->durationHours                      = func_get_arg(5);
            $this->durationMinutes                    = func_get_arg(6);
            $this->hasChildPrice                      = func_get_arg(7);
            $this->instantConfirmation                = func_get_arg(8);
            $this->isNonRefundable                    = func_get_arg(9);
            $this->maxAdultAge                        = func_get_arg(10);
            $this->maxChildAge                        = func_get_arg(11);
            $this->minAdultAge                        = func_get_arg(12);
            $this->minChildAge                        = func_get_arg(13);
            $this->paxMax                             = func_get_arg(14);
            $this->paxMin                             = func_get_arg(15);
            $this->prices                             = func_get_arg(16);
            $this->recommendedMarkup                  = func_get_arg(17);
            $this->title                              = func_get_arg(18);
            $this->titleTranslated                    = func_get_arg(19);
            $this->uuid                               = func_get_arg(20);
            $this->voucherRedemptionAddress           = func_get_arg(21);
            $this->voucherRedemptionAddressTranslated = func_get_arg(22);
            $this->voucherUse                         = func_get_arg(23);
            $this->voucherUseTranslated               = func_get_arg(24);
            $this->timeSlots                          = func_get_arg(25);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['allowChildren']                      = $this->allowChildren;
        $json['daysInAdvance']                      = $this->daysInAdvance;
        $json['description']                        = $this->description;
        $json['descriptionTranslated']              = $this->descriptionTranslated;
        $json['durationDays']                       = $this->durationDays;
        $json['durationHours']                      = $this->durationHours;
        $json['durationMinutes']                    = $this->durationMinutes;
        $json['hasChildPrice']                      = $this->hasChildPrice;
        $json['instantConfirmation']                = $this->instantConfirmation;
        $json['isNonRefundable']                    = $this->isNonRefundable;
        $json['maxAdultAge']                        = $this->maxAdultAge;
        $json['maxChildAge']                        = $this->maxChildAge;
        $json['minAdultAge']                        = $this->minAdultAge;
        $json['minChildAge']                        = $this->minChildAge;
        $json['paxMax']                             = $this->paxMax;
        $json['paxMin']                             = $this->paxMin;
        $json['prices']                             = $this->prices;
        $json['recommendedMarkup']                  = $this->recommendedMarkup;
        $json['title']                              = $this->title;
        $json['titleTranslated']                    = $this->titleTranslated;
        $json['uuid']                               = $this->uuid;
        $json['voucherRedemptionAddress']           = $this->voucherRedemptionAddress;
        $json['voucherRedemptionAddressTranslated'] = $this->voucherRedemptionAddressTranslated;
        $json['voucherUse']                         = $this->voucherUse;
        $json['voucherUseTranslated']               = $this->voucherUseTranslated;
        $json['timeSlots']                          = $this->timeSlots;

        return $json;
    }
}