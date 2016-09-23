<?php
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib;

use BeMyGuestAPIV1Lib\Controllers;

/**
 * BeMyGuestAPIV1Lib client class
 */
class BeMyGuestAPIV1Client
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($xAuthorization = NULL)
    {
        Configuration::$xAuthorization = $xAuthorization ? $xAuthorization : Configuration::$xAuthorization;
    }
 
    /**
     * Singleton access to Config controller
     * @return Controllers\ConfigController The *Singleton* instance
     */
    public function getConfig()
    {
        return Controllers\ConfigController::getInstance();
    }
 
    /**
     * Singleton access to Bookings controller
     * @return Controllers\BookingsController The *Singleton* instance
     */
    public function getBookings()
    {
        return Controllers\BookingsController::getInstance();
    }
 
    /**
     * Singleton access to Products controller
     * @return Controllers\ProductsController The *Singleton* instance
     */
    public function getProducts()
    {
        return Controllers\ProductsController::getInstance();
    }
}