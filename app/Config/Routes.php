<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('', static function ($routes) {
    $routes->get('/', 'ListaController::exibir', ['as' => 'lista_anotacoes']);
    $routes->get('(:num)', 'ListaController::excluir/$1', ['as' => 'excluir_anotacao']);
});

$routes->group('editar', static function($routes) {
   $routes->get('', 'FormController::exibir', ['as' => 'form_anotacao']);
   $routes->get('(:num)', 'FormController::exibir/$1', ['as' => 'form_anotacao_id']);
   
   $routes->post('add', 'FormController::inserir', ['as' => 'inserir_anotacao']);
   $routes->post('update/(:num)', 'FormController::atualizar/$1', ['as' => 'atualizar_anotacao']);
});
