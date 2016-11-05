<?php

return function($router) {

    $router->on('GET', '/', function() {
        return $this->response()->view('index.php', ['title' => 'Página Inicial']);
    });

    $router->on('GET', '/download', function() {
        return $this->response()->view('download.php', ['title' => 'Página de Download']);
    });

};
