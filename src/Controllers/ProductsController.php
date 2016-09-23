<?php
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib\Controllers;

use BeMyGuestAPIV1Lib\APIException;
use BeMyGuestAPIV1Lib\APIHelper;
use BeMyGuestAPIV1Lib\Configuration;
use BeMyGuestAPIV1Lib\Models;
use BeMyGuestAPIV1Lib\Exceptions;
use BeMyGuestAPIV1Lib\Http\HttpRequest;
use BeMyGuestAPIV1Lib\Http\HttpResponse;
use BeMyGuestAPIV1Lib\Http\HttpMethod;
use BeMyGuestAPIV1Lib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ProductsController extends BaseController {

    /**
     * @var ProductsController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return ProductsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get information about product using its UUID as parameter.###Response+ `uuid` - UUID of product+ `published` - true / false+ `title` - Title of product. Everytime on English+ `titleTranslated` - Title of product on requested language+ `description` - Description of product. Everytime on English+ `descriptionTranslated` - Description of product on requested language+ `highlights` - Highlights of product. Everytime on English+ `highlightsTranslated` - Highlights of product on requested language+ `additionalInfo` - Additional information of product. Everytime on English+ `additionalInfoTranslated` - Additional information of product on requested language+ `priceIncludes` - What's included in product price+ `priceIncludesTranslated` - Translated version of `priceIncludes`+ `itinerary` - Activity itinerary - only applicable for Package type, will be `NULL` for others+ `itineraryTranslated` - translated version of itinerary+ `warnings` - Warnings of the activity (related to safety and insurance)+ `warningsTranslated` - translated version of warnings+ `safety` - activity safety information+ `safetyTranslated` - translated version of safety information+ `latitude` - Latitude+ `longitude` - Longitude+ `minPax` - Minimum number of pax+ `maxPax` - Maximum number of pax+ `basePrice` - Base price of product (for list only)+ `currency` - Currency+ `isFlatPaxPrice` - `true/false` (An indication to tell if the `Product` has the same price for each pax in all of its `productTypes`)+ `reviewCount` - Number of reviews+ `reviewAverageScore` - Average score+ `typeName` - Type of product+ `typeUuid` - Type UUID+ `businessHoursFrom` - supplier business hours `from`+ `businessHoursTo` - supplier business hours `to`+ `meetingTime` - meeting time+ `hotelPickup` - false+ `meetingLocation` - instructions about meeting location with supplier+ `meetingLocationTranslated` - translated version of meeting location+ `photosUrl` - Base URL for images+ `photos` - Array of photos in different dimensions (Sizes: original, 75x50, 175x112, 680x325)+ `categories` - Array of categories+ `productTypes`    + `uuid` - UUID of Product Type    + `title` - Title of Product Type    + `titleTranslated` - Translated version of title    + `description` - Description of Product Type    + `descriptionTranslated` - translated version of description    + `durationDays` - duration in days    + `durationHours` - duration in hours    + `durationMinutes` - duration in  minutes    + `paxMin` - Minimum number of people    + `paxMax` - Maximum number of people    + `daysInAdvance` - how many days in advance booking can be made    + `isNonRefundable` - True if product not refundable    + `hasChildPrice` - Does product has child price    + `minAdultAge` - The minimum age allowed for an adult    + `maxAdultAge` - The maximum age allowed for an adult    + `allowChildren` - Is a child allowed for this product    + `minChildAge` - The minimum age allowed for a child    + `maxChildAge` - The maximum age allowed for a child    + `instantConfirmation` - if it's TRUE then booking this product should return new Booking status = `approved`, but if we're out of stock of e-tickets it can still return `waiting`     + `voucherUse` - instruction on how to use the voucher (Using what? Go to what palce? To redeem with who?)    + `voucherUseTranslated` - translated version of how to use voucher    + `voucherRedemptionAddress` - Voucher redemption address IF client needs to redeem a voucher.     + `voucherRedemptionAddressTranslated` - translated version of `voucherRedemptionAddress`    + `recommendedMarkup` - Apply this markup if you want to match with BMG's website prices    + `prices` - List of prices for Product Type for one month. The prices array consist of price for adults depending of number of adults and price for child.    + `timeSlots` - Available timeslots for product, might be `null`. If the `ProductType` has timeslots, the `timeslotUUID` of the product is REQUIRED in `Check a Booking` and `Create a new booking` methods.+ `addons` - Add-ons for product+ `locations` - Information about product location+ `url` - URL of product + `staticUrl` - Static URL of product+ `guideLanguages` - Available languages speak by tour guide.+ `audioHeadsetLanguages` - Available languages for Audio Headset material.+ `writtenLanguages` - Available written languages for reading material.If product has been deleted from BeMyGuest database response will be:        {          "error": {            "code": "GEN-GONE",            "http_code": 410,            "message": "Resource No Longer Available"          }        }### Promotional pricesExample of promotion data block:        "promotion": {              "type": "early_booking",              "daysInAdvance": 30,              "hoursInAdvance": null,              "name": "Early Bird",              "adult": {                "2": 93.45              },              "child": 0,              "discountPercent": 30,              "cancellationPolicy": []        }- If product type has promotional prices for selected date only one promotion (with best price) will be visible in API.- there are 3 types of promotions (`type` parameter) : `early_booking`, `last_minute` and `discount`- `early_booking` will have value for `daysInAdvance` parameter provided (`hoursInAdvance` will be `NULL`)- `last_minute` will have value for `hoursInAdvance` provided (`daysInAdvance` will be `NULL`)- `discount` type will have both `daysInAdvance` and `hoursInAdvance` set to `NULL`
     * @param  string     $uuid           Required parameter: UUID of product
     * @param  string     $currency       Optional parameter: currency UUID, also currency code may be provided in exchange
     * @param  string     $dateEnd        Optional parameter: product's prices end date, format YYYY-MM-DD
     * @param  string     $dateStart      Optional parameter: product's prices start date, format YYYY-MM-DD
     * @param  string     $language       Optional parameter: language UUID, also language code may be provided
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProduct (
                $uuid,
                $currency = NULL,
                $dateEnd = NULL,
                $dateStart = NULL,
                $language = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/products/{uuid}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'uuid'       => $uuid,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'currency'   => $currency,
            'date_end'   => $dateEnd,
            'date_start' => $dateStart,
            'language'   => $language,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'BeMyGuest.SDK.v1',
            'Accept'        => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 410) {
            throw new APIException('Resource No Longer Available', $_httpContext);
        }

        else if ($response->code == 400) {
            throw new APIException('Wrong Arguments', $_httpContext);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', $_httpContext);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource Not Found', $_httpContext);
        }

        else if ($response->code == 405) {
            throw new APIException('Method Not Allowed', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GETProductResponse());
    }
        
    /**
     * ###ResponseA response object has the following attributes:  + `uuid` - UUID of product+ `published` - true / false,+ `title` - Title of product. Always on English+ `titleTranslated` - Title of product on requested language+ `description` - Description of product. Always on English+ `descriptionTranslated` - Description of product on requested language+ `highlights` - Highlights of product. Always on English+ `highlightsTranslated` - Highlights of product on requested language+ `additionalInfo` - Additional information of product. Always on English+ `additionalInfoTranslated` - Additional information of product on requested language+ `priceIncludes` - What's included in product price+ `priceIncludesTranslated` - Translated version of `priceIncludes`+ `itinerary` - Activity itinerary - only applicable for Package type, will be `NULL` for others+ `itineraryTranslated` - translated version of itinerary+ `warnings` - Warnings of the activity (related to safety and insurance)+ `warningsTranslated` - translated version of warnings+ `safety` - activity safety information+ `safetyTranslated` - translated version of safety information+ `latitude` - Latitude+ `longitude` - Longitude+ `minPax` - Minimum number of pax+ `maxPax` - Maximum number of pax+ `basePrice` - Base price of product (for list only)+ `currency` - Currency+ `isFlatPaxPrice` - `true/false` (An indication to tell if the `Product` has the same price for each pax in all of its `productTypes` for the selected date. )+ `reviewCount` - Number of reviews+ `reviewAverageScore` - Average score+ `typeName` - Type of product+ `typeUuid` - Type UUID+ `businessHoursFrom` - supplier business hours `from`+ `businessHoursTo` - supplier business hours `to`+ `meetingTime` - meeting time+ `hotelPickup` - `true/false` + `meetingLocation` - instructions about meeting location with supplier+ `meetingLocationTranslated` - translated version of meeting location+ `photosUrl` - Base URL for images+ `photos` - Array of photos in different dimensions (Sizes: original, 75x50, 175x112, 680x325)+ `categories` - Array of categories+ `locations` - Information about product location+ `url` - URL of product If you requested only unpublished (`published` = `false`) products then the list will be simplified.Each element will consist only of these attributes:        {          "data": [            {                "uuid":"b03ce312-742f-5256-bfe2-014daf1c8d01",                "published":false,                "title":"Everest BaseCamp Trek - 16 Days",                "titleTranslated":null            },            {                "uuid":"d70fb77c-3e97-591e-b876-d638a643c41b",                "published":false,                "title":"Half day rock climbing, Ha Long Bay, Vietnam",                "titleTranslated":null            }            [...]        }If you requested only deleted (`deleted` = `false`) products then the list will be simplified.In this case `published` parameter will be ignored.This parameter exists to help partners to synchronize its cached products database.Each element will consist only of these attributes:        {          "data": [            {                "uuid":"b03ce312-742f-5256-bfe2-014daf1c8d01",                "deletedAt":"2015-06-01 14:28:37",                "title":"Everest BaseCamp Trek - 16 Days",                "titleTranslated":null            },            {                "uuid":"d70fb77c-3e97-591e-b876-d638a643c41b",                "published":"deletedAt":"2015-06-01 14:28:37",                "title":"Half day rock climbing, Ha Long Bay, Vietnam",                "titleTranslated":null            }            [...]        }###RequestA request can take these parameters:+ `type`: `b90bd912-3e92-52e6-8abb-c2722cf947db` (optional, string) - UUID of type of product+ `country`: `ebbfac98-5f89-5106-9c4e-9e5dfd485231` (optional, string) - UUID of country+ `city`: `f67e3919-036d-11e5-a2a9-d07e352b4840` (optional, string) - UUID of city - it will always overwrite (nullify) country parameter if provided+ `price_min`: 25.00 (optional, decimal) - minimal price in decimal format 000.00 - it's compared to base price+ `price_max`: 100.00 (optional, decimal) - max price in decimal format 000.00+ `category`: `5a6495b5-9a58-5257-93db-902ca3cf8b40` (optional, string) - UUID of litsing category+ `pax`: `2` (optional, integer) - number of guests+ `currency`: `79efbd4e-3648-5204-8f35-a0e51661a4c7` (optional, string) - currency UUID, also currency code may be provided in exchange+ `language`: `ZH-HANS` (optional, string) - language UUID, also language code may be provided+ `date_start`: `2015-06-25` (optional, string) - product start date, format YYYY-MM-DD+ `date_end`: `2015-06-30` (optional, string) - product end date, format YYYY-MM-DD+ `query`: `diving in Bali` (optional, string) - free phrase for text search for example &query=Bali+ `duration_days_min`: `0` (optional,integer) - product duration minimum days (default 0)+ `duration_days_max`: `0` (optional,integer) - product duration maximum days (default NULL)+ `latitude`: `1.313430` (optional, float) - search in distance radius: latitude value + `longitude`: `103.883768` (optional, float) - search in distance radius: longitude value+ `distance`: `10.5` (optional, float) - search in distance radius in km - to use this param you need to provide always 3 parameters: latitude, longitude and distance+ `sort`: `price` (optional, string) - sorting field, example: &sort=date,-price  or &sort=price+ `page`: `5` (optional, integer) - page number for results+ `per_page`: `25` (optional, integer) - how many results per page - if not provided default value from user account will be used+ `published`: `true` (optional, string) - default is set to true, if set to false then a list of shortened unpublished products will be returned+ `deleted`: `false` (optional, string) - default is set to false, if set to true then a list of shortened deleted products will be returned
     * @param  string      $category              Optional parameter: UUID of litsing category
     * @param  string      $city                  Optional parameter: UUID of city, it will always overwrite country parameter if provided
     * @param  string      $country               Optional parameter: UUID of country
     * @param  string      $currency              Optional parameter: currency UUID, also currency code may be provided in exchange
     * @param  string      $dateEnd               Optional parameter: product end date, format YYYY-MM-DD
     * @param  string      $dateStart             Optional parameter: product start date, format YYYY-MM-DD
     * @param  string      $deleted               Optional parameter: default is set to `false`
     * @param  string      $distance              Optional parameter: Distance in km
     * @param  integer     $durationDaysMax       Optional parameter: product duration maximum days (default NULL)
     * @param  integer     $durationDaysMin       Optional parameter: product duration minimum days (default 0)
     * @param  string      $language              Optional parameter: language UUID, also language code may be provided. It will overwrite the default language from user account
     * @param  string      $latitude              Optional parameter: Latitude value
     * @param  string      $longitude             Optional parameter: Longitute value
     * @param  double      $page                  Optional parameter: page number for results
     * @param  double      $pax                   Optional parameter: number of people
     * @param  double      $perPage               Optional parameter: how many results per page - if not provided default value from user account will be used
     * @param  integer     $priceMax              Optional parameter: max price in decimal format 000.00
     * @param  integer     $priceMin              Optional parameter: minimal price in decimal format 000.00 - it's compared to base price
     * @param  string      $published             Optional parameter: default is always set to `true`
     * @param  string      $query                 Optional parameter: free phrase for text search for example &query=Bali
     * @param  string      $sort                  Optional parameter: sorting field, example: &sort=date,-price  or &sort=price
     * @param  string      $type                  Optional parameter: UUID of type of product
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProductsList (
                $category = NULL,
                $city = NULL,
                $country = NULL,
                $currency = NULL,
                $dateEnd = NULL,
                $dateStart = NULL,
                $deleted = NULL,
                $distance = NULL,
                $durationDaysMax = NULL,
                $durationDaysMin = NULL,
                $language = NULL,
                $latitude = NULL,
                $longitude = NULL,
                $page = NULL,
                $pax = NULL,
                $perPage = NULL,
                $priceMax = NULL,
                $priceMin = NULL,
                $published = NULL,
                $query = NULL,
                $sort = NULL,
                $type = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/products';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'category'          => $category,
            'city'              => $city,
            'country'           => $country,
            'currency'          => $currency,
            'date_end'          => $dateEnd,
            'date_start'        => $dateStart,
            'deleted'           => $deleted,
            'distance'          => $distance,
            'duration_days_max' => $durationDaysMax,
            'duration_days_min' => $durationDaysMin,
            'language'          => $language,
            'latitude'          => $latitude,
            'longitude'         => $longitude,
            'page'              => $page,
            'pax'               => $pax,
            'per_page'          => $perPage,
            'price_max'         => $priceMax,
            'price_min'         => $priceMin,
            'published'         => $published,
            'query'             => $query,
            'sort'              => $sort,
            'type'              => $type,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'BeMyGuest.SDK.v1',
            'Accept'          => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Wrong Arguments', $_httpContext);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', $_httpContext);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource Not Found', $_httpContext);
        }

        else if ($response->code == 405) {
            throw new APIException('Method Not Allowed', $_httpContext);
        }

        else if ($response->code == 410) {
            throw new APIException('Resource No Longer Available', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GETProductsResponse());
    }
        

}