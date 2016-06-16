<?php

namespace TeamGrid\Api;

class Tasks extends Api
{
    public function update($id, $body = [])
    {
      return $this->put("tasks/{$id}", [], $body);
    }

    public function create($body = [], $parameters = [])
    {
        return $this->post('tasks', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("tasks/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('tasks', $parameters);
    }
}
