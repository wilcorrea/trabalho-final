<?php

return function($router) {

    $load = function($id = null) {
        return $this->response()->view('produtos.php', [
            'title' => 'Página de Produtos',
            'id' => $id
        ]);
    };

    $router
        ->get('/', $load)
        ->get('/:id', $load);
};
