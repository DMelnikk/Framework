<?php

namespace PHPFramework;

class Application
{
    // url-адрес(запрос)
    public string $uri;
    // экземпляр класса Request
    public Request $request;

    public Response $response;
    public Router $router;

    public function __construct()
    {
        // здесь получаем чистый запрос
        // posts&page=2&filter=1%202
        $this->uri = $_SERVER['QUERY_STRING'];
        $this->request = new Request($this->uri);
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

    }

    public function run(): void
    {
       echo $this->router->dispatch();
    }

}