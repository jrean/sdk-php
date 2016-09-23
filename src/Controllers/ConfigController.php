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
class ConfigController extends BaseController {

    /**
     * @var ConfigController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return ConfigController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * A Config object has the following attributes:+ `timezone` - Our sever timezone+ `now` - Our server timestamp+ `version` - Current version is "1.0"+ `serverUrl` - Main API URL+ `photosUrl` - Base Path to server where we store our images+ `productsSorting` - Available Products lists sorting options (can be combined with commas, for example &sort=date,-price )    + `date` - Date ascending    + `-date` - Date descending    + `price` - Price ascending    + `-price` - Price descending    + `distance` - Distance ascending (works only if `latitude`,`longitude` & `distance` parameters are provided, ignored otherwise)     + `-distance` - Distance descending (works only if `latitude`,`longitude` & `distance` parameters are provided, ignored otherwise)+ user - All important userdata for provided API key    + `name` - Name / Company / Organization    + `email` - E-Mail Address    + `uuid` - Unique ID    + `continueUrl` - Continue URL (not in use now)    + `notifyUrl` - Notify URL (not in use now)    + `suggestedMarkup` - Suggested markup, % decimal value, for example 7.5    + `defaultPagination` - Default Pagination value (per page), between 1-100    + `defaultSortBy` - Default sort by for /products (if not specified)    + `defaultCurrencyUuid` - Default currency UUID for /products (if not specified)    + `defaultCurrencyCode` - Default currency code for /products (if not specified)    + `defaultLanguageUuid` - Default language UUID  /products (if not specified)    + `defaultLanguageCode` - Default language code  /products (if not specified)    + `walletBalance` - Partner's available wallet balance, based on his deposits    + `walletAvailableBalance` - Wallet balance which is a combination of partner's deposit and assigned credit amount    + `wallet_alert_value` - Threshold value in SGD, when `walletBallance` reach this value then BMG and partner will be notified on this event+ `languages` - A list of supported languages.+ `currencies` - An array of supported currencies.+ `types` - An array of supported products types.+ `categories` - A tree of supported product categories.+ `locations` - A tree of supported locations. (Continent -> Country -> State -> City)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function retrieveConfig () 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/config';

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

        return $mapper->map($response->body, new Models\RetrieveConfigResponse());
    }
        

}