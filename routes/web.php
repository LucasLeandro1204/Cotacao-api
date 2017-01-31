<?php

// Api route group
$app->group(['prefix' => 'cotacao', 'namespace' => 'Api'], function() use ($app) {

    $app->get('/', [
        'as' => 'api.index', 'uses' => 'RateController@index'
    ]);

    $app->get('/listar', [
        'as' => 'api.list', 'uses' => 'RateController@list'
    ]);
});
