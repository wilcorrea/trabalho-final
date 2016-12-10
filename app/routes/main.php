<?php

use Simples\Core\Flow\Router;

return function(Router $router) {

    $menu = [
        '/home' => 'Home',
        '/menu' => 'Ementa',
        '/students' => 'Alunos',
        '/contact' => 'Contato',
    ];

    $router->data('title', 'Curso Básico PHP / 2016');
    $router->data('menu', $menu);

    $callback = function($data) {
        /** @var Router $this */
        return $this->response()->html('pages/index.php', $data);
    };

    $router
        ->on('GET', '/', $callback)
        ->on('GET', '/home', $callback)
        ->on('GET', '/index', $callback);

    $router->get('/menu', '\Fagoc\HeroController@menu');

    $router->get('/students', '\Fagoc\HeroController@students');

    $router
        ->get('/contact', '\Fagoc\HeroController@form')
        ->post('/contact', '\Fagoc\HeroController@send');

    $router->otherWise('GET', function($data) {

        $data['title'] = $data['title'] . ' :: Página não encontrada';

        return $this->response()->html('pages/404.php', $data);
    });
};
