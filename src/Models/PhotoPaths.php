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
class PhotoPaths implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps 1280x720
     * @var string $m1280x720 public property
     */
    public $m1280x720;

    /**
     * @todo Write general description for this property
     * @required
     * @maps 175x112
     * @var string $m175x112 public property
     */
    public $m175x112;

    /**
     * @todo Write general description for this property
     * @required
     * @maps 1920x1080
     * @var string $m1920x1080 public property
     */
    public $m1920x1080;

    /**
     * @todo Write general description for this property
     * @required
     * @maps 2048x1536
     * @var string $m2048x1536 public property
     */
    public $m2048x1536;

    /**
     * @todo Write general description for this property
     * @required
     * @maps 680x325
     * @var string $m680x325 public property
     */
    public $m680x325;

    /**
     * @todo Write general description for this property
     * @required
     * @maps 75x50
     * @var string $m75x50 public property
     */
    public $m75x50;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $original public property
     */
    public $original;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $m1280x720   Initialization value for the property $this->m1280x720
     * @param   string            $m175x112    Initialization value for the property $this->m175x112 
     * @param   string            $m1920x1080   Initialization value for the property $this->m1920x1080
     * @param   string            $m2048x1536   Initialization value for the property $this->m2048x1536
     * @param   string            $m680x325    Initialization value for the property $this->m680x325 
     * @param   string            $m75x50      Initialization value for the property $this->m75x50   
     * @param   string            $original    Initialization value for the property $this->original 
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->m1280x720 = func_get_arg(0);
            $this->m175x112  = func_get_arg(1);
            $this->m1920x1080 = func_get_arg(2);
            $this->m2048x1536 = func_get_arg(3);
            $this->m680x325  = func_get_arg(4);
            $this->m75x50    = func_get_arg(5);
            $this->original  = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['1280x720']  = $this->m1280x720;
        $json['175x112']   = $this->m175x112;
        $json['1920x1080'] = $this->m1920x1080;
        $json['2048x1536'] = $this->m2048x1536;
        $json['680x325']   = $this->m680x325;
        $json['75x50']     = $this->m75x50;
        $json['original']  = $this->original;

        return $json;
    }
}