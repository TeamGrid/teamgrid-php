<?php

namespace TeamGrid\Api;

use TeamGrid\Http\Client;

abstract class Api implements ApiInterface
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function put($uri = null, $parameters = [], $body = [])
    {
        return json_decode($this->execute('put', $uri, $parameters, $body)->getBody(), true);
    }

    public function get($uri = null, $parameters = [])
    {
        return json_decode($this->execute('get', $uri, $parameters)->getBody(), true);
    }

    public function post($uri = null, $parameters = [], $body = [])
    {
        return json_decode($this->execute('post', $uri, $parameters, $body)->getBody(), true);
    }

    public function execute($httpMethod, $uri, array $parameters = [], array $body = [])
    {
        return $this->getClient()->{$httpMethod}("{$uri}", [
            'query' => $parameters,
            'json' => $body
        ]);
    }

    protected function getClient()
    {
        return new Client($this->apiKey);
    }
}
