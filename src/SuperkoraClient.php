<?php

namespace MyVendor\Superkora;

use GuzzleHttp\Client;
use Superkora\Exceptions\ApiRequestException;

class SuperkoraClient {

    /* @var $client Client */
    protected $client;

    protected $apiToken;
    protected $withoutData;
    protected $include = [];
    protected $perPage = 50;
    protected $page = 1;
    
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
        $query = [
            'api_token' => $this->apiToken,
            'per_page' => $this->perPage,
            'page' => $this->page
        ];
        if(count($this->include))
        {
            $query['include'] = $this->include;
        }

        $response = $this->client->get($url, ['query' => $query]);

        $body = json_decode($response->getBody()->getContents());

        if(property_exists($body, 'error'))
        {
            if(is_object($body->error))
            {
                throw new ApiRequestException($body->error->message, $body->error->code);
            }
            else
            {
                throw new ApiRequestException($body->error, 500);
            }

            return $response;
        }

        if($hasData && $this->withoutData)
        {
            return $body->data;
        }

        return $body;
    }

    protected function callData($url)
    {
        return $this->call($url, true);
    }

    /**
     * @param $include - string or array of relations to include with the query
     */
    public function setInclude($include)
    {
        if(is_array($include) && !empty($include))
        {
            $include = implode(',', $include);
        }

        $this->include = $include;

        return $this;
    }

    /**
     * @param $perPage - int of per_page limit data in request
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @param $page - int of requested page
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
}
