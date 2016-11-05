<?php

return function($router) {

    $menu = [
        '/home' => 'Home',
        '/produtos' => 'Produtos',
        '/vendedores' => 'Vendedores',
        '/contato' => 'Fale Conosco',
    ];

    $callback = function() use ($menu) {
        return $this->response()->view('index.php', ['title' => 'Página Inicial', 'menu' => $menu]);
    };

    $router
        ->on('GET', '/', $callback)
        ->on('GET', '/home', $callback)
        ->on('GET', '/index', $callback);

    $router->on('GET', '/download', function() use ($menu) {
        return $this->response()->view('download.php', ['title' => 'Página de Download', 'menu' => $menu]);
    });

    $router->on('GET', '/contato', function() use ($menu) {
        return $this->response()->view('contato.php', ['title' => 'Fale Conosco', 'menu' => $menu]);
    });

    $router->on('POST', '/contato', function($data) use ($menu) {
        return $this->response()->view('enviar.php', ['title' => 'Fale Conosco', 'all' => $this->request()->all(), 'menu' => $menu]);
    });

    $router->group('GET', '/produtos', 'app/routes/produtos.php');

};
