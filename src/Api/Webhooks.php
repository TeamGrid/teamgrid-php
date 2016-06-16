<?php

namespace TeamGrid\Api;

class Webhooks extends Api
{
    public function create($body = [], $parameters = [])
    {
        return $this->post('webhooks', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("webhooks/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('webhooks', $parameters);
    }
}
