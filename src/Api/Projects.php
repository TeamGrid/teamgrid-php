<?php

namespace TeamGrid\Api;

class Projects extends Api
{
    public function update($id, $body = [])
    {
      return $this->put("projects/{$id}", [], $body);
    }

    public function create($body = [], $parameters = [])
    {
        return $this->post('projects', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("projects/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('projects', $parameters);
    }
}
