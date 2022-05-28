<?php

namespace Modules\CurbAppealLive\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Storage;
use GuzzleHttp\Client;
use App\Models\User;
use Modules\CurbAppealLive\Models\Channel;

class CurbAppealLiveApiController extends Controller
{
    protected $guzzleclient;
    protected $x_api_key;
    protected $api;

    public function _construct(){}

    public function setClient()
    {
        $this->api       = 'https://gpdz87ppk5.execute-api.us-east-1.amazonaws.com/v2/'; //$connection['wpxpress-endpoint'];
        $this->x_api_key = 'MZJqvOZN0t9TFxUMapQzd4Qs7JIHZSQf6yTt7Dab'; //$channel['x_api_key'];
        $this->guzzleclient = new Client([
            'headers' => [
                'x-api-key' => $this->x_api_key,
                'Content-Type' => 'application/json'
            ] 
        ]);
        return $this->guzzleclient;
    }

    public function getChannelBySubdomain( $subdomain) {

        $user = Channel::where('subdomain', $subdomain)->first();
        //dd($user);

        // Setup Guzzle client
        $guzzleclient = $this->setClient();

        // Set Endpoint for call
        $endpoint = 'gouser?subdomain='. $user->subdomain;
        
        // Set URI
        $uri = $this->api . $endpoint;

        // Make Call
        $response = $guzzleclient->request('GET', $uri)->getBody();

        return json_decode($response, true);
    }



    


}