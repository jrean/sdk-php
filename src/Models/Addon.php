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
class Addon implements JsonSerializable {
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
     * @var double $pricePerPerson public property
     */
    public $pricePerPerson;

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
     * Constructor to set initial or default values of member properties
     * @param   string            $description             Initialization value for the property $this->description          
     * @param   string            $descriptionTranslated   Initialization value for the property $this->descriptionTranslated
     * @param   double            $pricePerPerson          Initialization value for the property $this->pricePerPerson       
     * @param   string            $title                   Initialization value for the property $this->title                
     * @param   string            $titleTranslated         Initialization value for the property $this->titleTranslated      
     * @param   string            $uuid                    Initialization value for the property $this->uuid                 
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->description           = func_get_arg(0);
            $this->descriptionTranslated = func_get_arg(1);
            $this->pricePerPerson        = func_get_arg(2);
            $this->title                 = func_get_arg(3);
            $this->titleTranslated       = func_get_arg(4);
            $this->uuid                  = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['description']           = $this->description;
        $json['descriptionTranslated'] = $this->descriptionTranslated;
        $json['pricePerPerson']        = $this->pricePerPerson;
        $json['title']                 = $this->title;
        $json['titleTranslated']       = $this->titleTranslated;
        $json['uuid']                  = $this->uuid;

        return $json;
    }
}