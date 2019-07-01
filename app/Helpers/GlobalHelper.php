<?php

use App\Setting;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;

function GetVehiculo($modelyear, $make, $model)
{
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://one.nhtsa.gov',
        // You can set any number of default request options.
        'timeout' => 2.0,
    ]);

    $response = $client->request('GET', '/webapi/api/SafetyRatings/modelyear/'.$modelyear.'/make/'.$make.'/model/'.$model.'?format=json');

    $result = json_decode( $response->getBody()->getContents());
    return $result;
}
function GetRating($VehicleId)
{
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://one.nhtsa.gov',
        // You can set any number of default request options.
        'timeout' => 2.0,
    ]);

    $response = $client->request('GET', '/webapi/api/SafetyRatings/VehicleId/'. $VehicleId.'?format=json');
    
    $result = json_decode($response->getBody()->getContents());
    return $result;
}