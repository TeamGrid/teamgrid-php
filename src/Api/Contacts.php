<?php

namespace TeamGrid\Api;

class Contacts extends Api
{
    public function update($id, $body = [])
    {
      return $this->put("contacts/{$id}", [], $body);
    }

    public function create($body = [], $parameters = [])
    {
        return $this->post('contacts', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("contacts/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('contacts', $parameters);
    }
}
