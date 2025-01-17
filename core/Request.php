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

    public function getPath(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']); // GET , POST
    }

}