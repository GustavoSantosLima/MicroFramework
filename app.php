<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Gustavo\App;
$app->setRenderer(new Gustavo\Renderer\PHPRenderer);

$app->get('/home/{name}', function ($params) {
    return "
    <!DOCTYPE html>
    <html lang=\"pt-br\">
        <head>
            <meta charset=\"utf-8\">
            <title>{$params[1]}</title>
        </head>
        <body>
            <h1>Meu nome é {$params[1]}</h1>
        </body>
    </html>
    ";
});

$app->get('/params/{param}', function ($params) {
    return $params;
});

$app->run();