<?php

namespace PHPFramework;

class Application
{
    // получаем url-адрес(запрос)
    public string $uri;
    // экземпляр класса Request
    public Request $request;

    public Response $response;

    public function __construct()
    {
        // здесь получаем чистый запрос
        // posts&page=2&filter=1%202
        $this->uri = $_SERVER['QUERY_STRING'];
        $this->request = new Request($this->uri);
        $this->response = new Response();

    }

}