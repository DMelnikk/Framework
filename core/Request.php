<?php

namespace PHPFramework;

class Request
{
    public string $uri;

    public function __construct(string $uri)
    {
        // декодируем url
        // posts&page=2&filter=1 2
        $this->uri = trim(urldecode($uri), '/');
    }

}