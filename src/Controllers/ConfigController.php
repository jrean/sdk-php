<?php
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 on 05/03/2016
 */

namespace BeMyGuestAPIV1Lib\Controllers;

use BeMyGuestAPIV1Lib\APIException;
use BeMyGuestAPIV1Lib\APIHelper;
use BeMyGuestAPIV1Lib\Configuration;
use Unirest\Unirest;
class ConfigController {

    /* private fields for configuration */

    /**
     * X-Authorization API KEY Value 
     * @var string
     */
    private $xAuthorization;

    /**
     * Constructor with authentication and configuration parameters
     */
    function __construct($xAuthorization)
    {
        $this->xAuthorization = $xAuthorization ? $xAuthorization : Configuration::$xAuthorization;
    }

    /**
     * A Config object has the following attributes:+ `timezone` - Our sever timezone+ `now` - Our server timestamp+ `version` - Current version is "1.0"+ `serverUrl` - Main API URL+ `photosUrl` - Base Path to server where we store our images+ `productsSorting` - Available Products lists sorting options (can be combined with commas, for example &sort=date,-price )    + `date` - Date ascending    + `-date` - Date descending    + `price` - Price ascending    + `-price` - Price descending    + `distance` - Distance ascending (works only if `latitude`,`longitude` & `distance` parameters are provided, ignored otherwise)     + `-distance` - Distance descending (works only if `latitude`,`longitude` & `distance` parameters are provided, ignored otherwise)+ user - All important userdata for provided API key    + `name` - Name / Company / Organization    + `email` - E-Mail Address    + `uuid` - Unique ID    + `continueUrl` - Continue URL (not in use now)    + `notifyUrl` - Notify URL (not in use now)    + `suggestedMarkup` - Suggested markup, % decimal value, for example 7.5    + `defaultPagination` - Default Pagination value (per page), between 1-100    + `defaultSortBy` - Default sort by for /products (if not specified)    + `defaultCurrencyUuid` - Default currency UUID for /products (if not specified)    + `defaultCurrencyCode` - Default currency code for /products (if not specified)    + `defaultLanguageUuid` - Default language UUID  /products (if not specified)    + `defaultLanguageCode` - Default language code  /products (if not specified)    + `walletBalance` - Partner's available wallet balance, based on his deposits    + `walletAvailableBalance` - Wallet balance which is a combination of partner's deposit and assigned credit amount    + `wallet_alert_value` - Threshold value in SGD, when `walletBallance` reach this value then BMG and partner will be notified on this event+ `languages` - A list of supported languages.+ `currencies` - An array of supported currencies.+ `types` - An array of supported products types.+ `categories` - A tree of supported product categories.+ `locations` - A tree of supported locations. (Continent -> Country -> State -> City)
     * @return mixed response from the API call*/
    public function retrieveConfig () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/v1/config';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'BeMyGuest.SDK.v1',
            'Accept'        => 'application/json',
            'X-Authorization' => $this->xAuthorization
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Wrong Arguments', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource Not Found', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('Method Not Allowed', 405, $response->body);
        }

        else if ($response->code == 410) {
            throw new APIException('Resource No Longer Available', 410, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
}