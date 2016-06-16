<?php

namespace TeamGrid\Api;

class Services extends Api
{
    public function find($id)
    {
        return $this->get("services/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('services', $parameters);
    }
}
