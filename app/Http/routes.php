<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});


$app->get('charts/dealMain', 'ChartsController@getMainData');

$app->get('charts/dealsTotals', 'ChartsController@getTotals');
$app->get('charts/sellersTotals', 'ChartsController@getSellerListTotals');
$app->get('deal/getAll','DealsController@getAll');
$app->get('deal/{deal}/status/{status}', ['uses' =>'DealsController@setStatusDeal']);