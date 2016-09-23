<?php 
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

use JsonSerializable;

/**
 * Product listing model
 */
class Product implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $additionalInfo public property
     */
    public $additionalInfo;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $additionalInfoTranslated public property
     */
    public $additionalInfoTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var Addon[] $addons public property
     */
    public $addons;

    /**
     * @todo Write general description for this property
     * @required
     * @var Language[] $audioHeadsetLanguages public property
     */
    public $audioHeadsetLanguages;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $basePrice public property
     */
    public $basePrice;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $businessHoursFrom public property
     */
    public $businessHoursFrom;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $businessHoursTo public property
     */
    public $businessHoursTo;

    /**
     * @todo Write general description for this property
     * @required
     * @var Category[] $categories public property
     */
    public $categories;

    /**
     * @todo Write general description for this property
     * @required
     * @var Currency $currency public property
     */
    public $currency;

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
     * @var Language[] $guideLanguages public property
     */
    public $guideLanguages;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $highlights public property
     */
    public $highlights;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $highlightsTranslated public property
     */
    public $highlightsTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $hotelPickup public property
     */
    public $hotelPickup;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $isFlatPaxPrice public property
     */
    public $isFlatPaxPrice;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $itinerary public property
     */
    public $itinerary;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $itineraryTranslated public property
     */
    public $itineraryTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $latitude public property
     */
    public $latitude;

    /**
     * @todo Write general description for this property
     * @required
     * @var Location[] $locations public property
     */
    public $locations;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $longitude public property
     */
    public $longitude;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $maxPax public property
     */
    public $maxPax;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $meetingLocation public property
     */
    public $meetingLocation;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $meetingLocationTranslated public property
     */
    public $meetingLocationTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $meetingTime public property
     */
    public $meetingTime;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $minPax public property
     */
    public $minPax;

    /**
     * @todo Write general description for this property
     * @required
     * @var Photo[] $photos public property
     */
    public $photos;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $photosUrl public property
     */
    public $photosUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $priceExcludes public property
     */
    public $priceExcludes;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $priceExcludesTranslated public property
     */
    public $priceExcludesTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $priceIncludes public property
     */
    public $priceIncludes;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $priceIncludesTranslated public property
     */
    public $priceIncludesTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var ProductType[] $productTypes public property
     */
    public $productTypes;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $reviewAverageScore public property
     */
    public $reviewAverageScore;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $reviewCount public property
     */
    public $reviewCount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $safety public property
     */
    public $safety;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $safetyTranslated public property
     */
    public $safetyTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $staticUrl public property
     */
    public $staticUrl;

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
     * @var string $typeName public property
     */
    public $typeName;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $typeUuid public property
     */
    public $typeUuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $uuid public property
     */
    public $uuid;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $warnings public property
     */
    public $warnings;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $warningsTranslated public property
     */
    public $warningsTranslated;

    /**
     * @todo Write general description for this property
     * @required
     * @var Language[] $writtenLanguages public property
     */
    public $writtenLanguages;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $additionalInfo              Initialization value for the property $this->additionalInfo           
     * @param   string            $additionalInfoTranslated    Initialization value for the property $this->additionalInfoTranslated 
     * @param   array             $addons                      Initialization value for the property $this->addons                   
     * @param   array             $audioHeadsetLanguages       Initialization value for the property $this->audioHeadsetLanguages    
     * @param   double            $basePrice                   Initialization value for the property $this->basePrice                
     * @param   string            $businessHoursFrom           Initialization value for the property $this->businessHoursFrom        
     * @param   string            $businessHoursTo             Initialization value for the property $this->businessHoursTo          
     * @param   array             $categories                  Initialization value for the property $this->categories               
     * @param   Currency          $currency                    Initialization value for the property $this->currency                 
     * @param   string            $description                 Initialization value for the property $this->description              
     * @param   string            $descriptionTranslated       Initialization value for the property $this->descriptionTranslated    
     * @param   array             $guideLanguages              Initialization value for the property $this->guideLanguages           
     * @param   string            $highlights                  Initialization value for the property $this->highlights               
     * @param   string            $highlightsTranslated        Initialization value for the property $this->highlightsTranslated     
     * @param   bool              $hotelPickup                 Initialization value for the property $this->hotelPickup              
     * @param   bool              $isFlatPaxPrice              Initialization value for the property $this->isFlatPaxPrice           
     * @param   string            $itinerary                   Initialization value for the property $this->itinerary                
     * @param   string            $itineraryTranslated         Initialization value for the property $this->itineraryTranslated      
     * @param   string            $latitude                    Initialization value for the property $this->latitude                 
     * @param   array             $locations                   Initialization value for the property $this->locations                
     * @param   string            $longitude                   Initialization value for the property $this->longitude                
     * @param   integer           $maxPax                      Initialization value for the property $this->maxPax                   
     * @param   string            $meetingLocation             Initialization value for the property $this->meetingLocation          
     * @param   string            $meetingLocationTranslated   Initialization value for the property $this->meetingLocationTranslated
     * @param   string            $meetingTime                 Initialization value for the property $this->meetingTime              
     * @param   integer           $minPax                      Initialization value for the property $this->minPax                   
     * @param   array             $photos                      Initialization value for the property $this->photos                   
     * @param   string            $photosUrl                   Initialization value for the property $this->photosUrl                
     * @param   string            $priceExcludes               Initialization value for the property $this->priceExcludes            
     * @param   string            $priceExcludesTranslated     Initialization value for the property $this->priceExcludesTranslated  
     * @param   string            $priceIncludes               Initialization value for the property $this->priceIncludes            
     * @param   string            $priceIncludesTranslated     Initialization value for the property $this->priceIncludesTranslated  
     * @param   array             $productTypes                Initialization value for the property $this->productTypes             
     * @param   double            $reviewAverageScore          Initialization value for the property $this->reviewAverageScore       
     * @param   integer           $reviewCount                 Initialization value for the property $this->reviewCount              
     * @param   string            $safety                      Initialization value for the property $this->safety                   
     * @param   string            $safetyTranslated            Initialization value for the property $this->safetyTranslated         
     * @param   string            $staticUrl                   Initialization value for the property $this->staticUrl                
     * @param   string            $title                       Initialization value for the property $this->title                    
     * @param   string            $titleTranslated             Initialization value for the property $this->titleTranslated          
     * @param   string            $typeName                    Initialization value for the property $this->typeName                 
     * @param   string            $typeUuid                    Initialization value for the property $this->typeUuid                 
     * @param   string            $url                         Initialization value for the property $this->url                      
     * @param   string            $uuid                        Initialization value for the property $this->uuid                     
     * @param   string            $warnings                    Initialization value for the property $this->warnings                 
     * @param   string            $warningsTranslated          Initialization value for the property $this->warningsTranslated       
     * @param   array             $writtenLanguages            Initialization value for the property $this->writtenLanguages         
     */
    public function __construct()
    {
        if(47 == func_num_args())
        {
            $this->additionalInfo            = func_get_arg(0);
            $this->additionalInfoTranslated  = func_get_arg(1);
            $this->addons                    = func_get_arg(2);
            $this->audioHeadsetLanguages     = func_get_arg(3);
            $this->basePrice                 = func_get_arg(4);
            $this->businessHoursFrom         = func_get_arg(5);
            $this->businessHoursTo           = func_get_arg(6);
            $this->categories                = func_get_arg(7);
            $this->currency                  = func_get_arg(8);
            $this->description               = func_get_arg(9);
            $this->descriptionTranslated     = func_get_arg(10);
            $this->guideLanguages            = func_get_arg(11);
            $this->highlights                = func_get_arg(12);
            $this->highlightsTranslated      = func_get_arg(13);
            $this->hotelPickup               = func_get_arg(14);
            $this->isFlatPaxPrice            = func_get_arg(15);
            $this->itinerary                 = func_get_arg(16);
            $this->itineraryTranslated       = func_get_arg(17);
            $this->latitude                  = func_get_arg(18);
            $this->locations                 = func_get_arg(19);
            $this->longitude                 = func_get_arg(20);
            $this->maxPax                    = func_get_arg(21);
            $this->meetingLocation           = func_get_arg(22);
            $this->meetingLocationTranslated = func_get_arg(23);
            $this->meetingTime               = func_get_arg(24);
            $this->minPax                    = func_get_arg(25);
            $this->photos                    = func_get_arg(26);
            $this->photosUrl                 = func_get_arg(27);
            $this->priceExcludes             = func_get_arg(28);
            $this->priceExcludesTranslated   = func_get_arg(29);
            $this->priceIncludes             = func_get_arg(30);
            $this->priceIncludesTranslated   = func_get_arg(31);
            $this->productTypes              = func_get_arg(32);
            $this->reviewAverageScore        = func_get_arg(33);
            $this->reviewCount               = func_get_arg(34);
            $this->safety                    = func_get_arg(35);
            $this->safetyTranslated          = func_get_arg(36);
            $this->staticUrl                 = func_get_arg(37);
            $this->title                     = func_get_arg(38);
            $this->titleTranslated           = func_get_arg(39);
            $this->typeName                  = func_get_arg(40);
            $this->typeUuid                  = func_get_arg(41);
            $this->url                       = func_get_arg(42);
            $this->uuid                      = func_get_arg(43);
            $this->warnings                  = func_get_arg(44);
            $this->warningsTranslated        = func_get_arg(45);
            $this->writtenLanguages          = func_get_arg(46);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['additionalInfo']            = $this->additionalInfo;
        $json['additionalInfoTranslated']  = $this->additionalInfoTranslated;
        $json['addons']                    = $this->addons;
        $json['audioHeadsetLanguages']     = $this->audioHeadsetLanguages;
        $json['basePrice']                 = $this->basePrice;
        $json['businessHoursFrom']         = $this->businessHoursFrom;
        $json['businessHoursTo']           = $this->businessHoursTo;
        $json['categories']                = $this->categories;
        $json['currency']                  = $this->currency;
        $json['description']               = $this->description;
        $json['descriptionTranslated']     = $this->descriptionTranslated;
        $json['guideLanguages']            = $this->guideLanguages;
        $json['highlights']                = $this->highlights;
        $json['highlightsTranslated']      = $this->highlightsTranslated;
        $json['hotelPickup']               = $this->hotelPickup;
        $json['isFlatPaxPrice']            = $this->isFlatPaxPrice;
        $json['itinerary']                 = $this->itinerary;
        $json['itineraryTranslated']       = $this->itineraryTranslated;
        $json['latitude']                  = $this->latitude;
        $json['locations']                 = $this->locations;
        $json['longitude']                 = $this->longitude;
        $json['maxPax']                    = $this->maxPax;
        $json['meetingLocation']           = $this->meetingLocation;
        $json['meetingLocationTranslated'] = $this->meetingLocationTranslated;
        $json['meetingTime']               = $this->meetingTime;
        $json['minPax']                    = $this->minPax;
        $json['photos']                    = $this->photos;
        $json['photosUrl']                 = $this->photosUrl;
        $json['priceExcludes']             = $this->priceExcludes;
        $json['priceExcludesTranslated']   = $this->priceExcludesTranslated;
        $json['priceIncludes']             = $this->priceIncludes;
        $json['priceIncludesTranslated']   = $this->priceIncludesTranslated;
        $json['productTypes']              = $this->productTypes;
        $json['reviewAverageScore']        = $this->reviewAverageScore;
        $json['reviewCount']               = $this->reviewCount;
        $json['safety']                    = $this->safety;
        $json['safetyTranslated']          = $this->safetyTranslated;
        $json['staticUrl']                 = $this->staticUrl;
        $json['title']                     = $this->title;
        $json['titleTranslated']           = $this->titleTranslated;
        $json['typeName']                  = $this->typeName;
        $json['typeUuid']                  = $this->typeUuid;
        $json['url']                       = $this->url;
        $json['uuid']                      = $this->uuid;
        $json['warnings']                  = $this->warnings;
        $json['warningsTranslated']        = $this->warningsTranslated;
        $json['writtenLanguages']          = $this->writtenLanguages;

        return $json;
    }
}