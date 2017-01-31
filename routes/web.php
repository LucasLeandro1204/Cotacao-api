<?php

// Api route group
$app->group(['prefix' => 'cotacao', 'namespace' => 'Api'], function() use ($app) {

    $app->get('/', [
        'as' => 'api.all', 'uses' => 'RateController@all'
    ]);

    $app->get('/listar', [
        'as' => 'api.list', 'uses' => 'RateController@list'
    ]);
});
