<?php

// Api route group
$app->group(['namespace' => 'Site'], function() use ($app) {

    $app->get('/', [
        'as' => 'site.index', 'uses' => 'SiteController@index'
    ]);

});

$app->group(['prefix' => 'cotacao', 'namespace' => 'Api'], function() use ($app) {

    $app->get('/', [
        'as' => 'api.index', 'uses' => 'RateController@index'
    ]);

    $app->get('/{coins}', [
        'as' => 'api.list', 'uses' => 'RateController@list'
    ]);
});
