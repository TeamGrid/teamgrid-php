<?php

namespace TeamGrid\Http;

use Psr\Http\Message\RequestInterface;

class Client extends \GuzzleHttp\Client implements ClientInterface
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;

        parent::__construct([
            'base_uri' => 'https://api.teamgridapp.com',
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '.$this->apiKey,
            ]
        ]);
    }

    public function send(RequestInterface $request, array $options = [])
    {
        return parent::send($request, $options);
    }
}
