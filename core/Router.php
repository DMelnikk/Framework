<?php

namespace PHPFramework;

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    // К нам будет приходить 2 зависимости request,response
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    // метод которые отображает все маршруты
    public function getRoutes(): array
    {
        return $this->routes;
    }


    // Пример использования
    //$app->router->get('/', function() use($app) {
    //    return 'Main page';
    //});
    public function get($path, $callback): void
    {
        $path = trim($path, '/');
        $this->routes['GET']["/{$path}"] = $callback;
    }

    public function post($path, $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch(): mixed
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method]["/{$path}"] ?? false;
        // если мы не нашли маршрут в списке маршрутов
        if(false === $callback) {
            $this->response->setResponseCode(404);
            return 'PAGE NOT FOUND 404';
        }
        return call_user_func($callback);
//        dump($path, $method,$callback);
    }


}