<?php

namespace TeamGrid\Api;

class Times extends Api
{
    public function update($id, $body = [])
    {
      return $this->put("times/{$id}", [], $body);
    }

    public function create($body = [], $parameters = [])
    {
        return $this->post('times', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("times/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('times', $parameters);
    }
}
