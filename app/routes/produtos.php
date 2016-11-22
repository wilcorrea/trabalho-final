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
        ->get('/add', function() {
            return $this->response()->view('produtos/novo.php', [
                'title' => 'Novo Produto'
            ]);
        })
        ->post('/save', function() {
            return $this->response()->view('produtos/salvar.php', [
                'title' => 'Novo Produto'
            ]);
        })
        ->get('/:id', function($id) {
            return $this->response()->view('produtos/editar.php', [
                'title' => 'Editar Produto', 'id' => $id
            ]);
        })
        ->get('/:id/remove', function($id) {

            (new Fagoc\Produto())->delete("id = '{$id}'");

            return $this->response()->redirect('/produtos');
        });
};
