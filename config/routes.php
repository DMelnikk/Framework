<?php

/**
 * @var \PHPFramework\Application $app
 */

$app->router->get('/', function() use($app) {
    return 'Main page';
});

$app->router->get('about', function() use($app) {
    return 'About page';
});

$app->router->get('/contact', function() use($app) {
    return 'Contact form page';
});

$app->router->post('/contact', function() use($app) {
    return 'Contact form POST page';
});
