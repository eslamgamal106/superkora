<?php

namespace MyVendor\Superkora;

use GuzzleHttp\Client;
use Superkora\Exceptions\ApiRequestException;

class SuperkoraClient {

    protected $withoutData;
    protected $include = [];
    protected $body = [];
    
    public function __construct()
    {
        $options = [
            'base_uri' => 'http://koramania.cloudapp.net/statsspider/api/',
			'headers' => [
				'Content-Type' => 'application/json',
				'Authorization' => '121240051137042026099090154023230132165239188197148132186153054240010231143032224178026196033130179160073105230128153208115094091087019109230235'
			]
        ];
        $this->client = new Client($options);

      /*   $this->apiToken = config('soccerapi.api_token');
        if(empty($this->apiToken))
        {
            throw new \InvalidArgumentException('No API token set');
        }

        $this->withoutData = empty(config('soccerapi.without_data')) ? false : config('soccerapi.without_data'); */
    }

    protected function call($url, $hasData = false)
    {
        try {

            $response = $this->client->request('POST',$url, ['json' => $this->body]);
            $data = json_decode($response->getBody()->getContents());
            return $data;  
        
        }  catch (\Exception $e) {
           
            if ($e->getResponse()->getStatusCode() == '400') {
                echo "Got response 400";
            }
            if ($e->getResponse()->getStatusCode() == '500') {
                echo "Got response 500";
            }
        }
    }

    protected function callData($url)
    {
        return $this->call($url, true);
    }
    
    public function setBody($params) {
        if(is_array($params) && !empty($params))
        {
            $params = $params;
            
        }
        $this->body = $params;
       return $this;
    }
}
