<?php

// Api route group
$app->group(['prefix' => 'rate', 'namespace' => 'Api'], function() use ($app) {

    $app->get('/', [
        'as' => 'api.index', 'uses' => 'RateController@index'
    ]);

    $app->get('/{coins}', [
        'as' => 'api.list', 'uses' => 'RateController@list'
    ]);
});
