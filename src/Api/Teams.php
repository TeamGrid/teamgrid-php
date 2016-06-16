<?php

namespace TeamGrid\Api;

class Teams extends Api
{
    public function all($parameters = [])
    {
        return $this->get('teams', $parameters);
    }
}
