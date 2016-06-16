<?php

namespace TeamGrid\Api;

class Lists extends Api
{
    public function find($id)
    {
        return $this->get("lists/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('lists', $parameters);
    }
}
