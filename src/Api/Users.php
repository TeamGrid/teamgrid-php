<?php

namespace TeamGrid\Api;

class Users extends Api
{
    public function all($parameters = [])
    {
        return $this->get('users', $parameters);
    }
}
