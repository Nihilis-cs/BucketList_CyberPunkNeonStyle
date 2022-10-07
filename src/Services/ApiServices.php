<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiServices{


    private HttpClientInterface $client;

    public function __construct(
        HttpClientInterface $client
    )
    {
        $this->client = $client;
    }

    function ditBonjour(){
        $reponse = $this->client->request(
            'GET',
            'https://api.yomomma.info/'
        );
        $nom = $reponse->toArray();
        return $nom["joke"];
    }

    function insulteEnAllemand(){
        dump('DasScheize BinDur Fluffig ACH Hitler Gazoduckshnaffen!!');
    }

}
