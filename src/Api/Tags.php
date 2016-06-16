<?php

namespace TeamGrid\Api;

class Tags extends Api
{
    public function find($id)
    {
        return $this->get("tags/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('tags', $parameters);
    }
}
