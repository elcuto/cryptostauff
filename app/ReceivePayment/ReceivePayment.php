<?php

namespace App\ReceivePayment;

use App\User;
use GuzzleHttp\Client;
// use Illuminate\Support\Facades\Http;


/**
 *
 */


class ReceivePayment
{
    public $baseURL ='http://localhost:3000/api/v2/';
    // public $email;
    public $api_code = '7a42029e-e0d6-4469-8008-75f4088d62e1';
    public $password;


    public function __construct($password)
    {
        // $this->email = $email;
        $this->password = $password;
    }

    public function sendRequest(){
        try {
            // dd($this->password);
            $client = new Client([
                'base_uri' => 'http://127.0.0.1:3000',
            ]);
            $response = $client->post('/api/v2/create', [
                'form_params'=> [
                    'password' => $this->password,
                    'api_code' => $this->api_code,
                    'hd'=> 'true'
                ]
            ]);
            $statusCode = $response->getStatusCode();
            $responseData = json_decode($response->getBody());
            return $responseData;
           

        } catch (GuzzleHttp\Exception\ClientException $e) {
            $responseData = json_decode($response->getBody());
            $response = $e->getResponse();
            $responseBodyAsString = $e->getResponse()->getBody();

            return $responseBodyAsString;
        }
    }
}