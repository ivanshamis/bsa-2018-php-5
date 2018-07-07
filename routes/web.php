<?php

use App\Services\{CurrencyRepositoryInterface,CurrencyPresenter};
use App\Services\GetPopularCurrenciesCommandHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/currencies/popular', function () {
    $repository =  App::make(CurrencyRepositoryInterface::class);
    $command = new GetPopularCurrenciesCommandHandler($repository);
    $currencies = $command->handle();
    foreach ($currencies as $currency) {
        $presented[] = CurrencyPresenter::present($currency);   
    }
    return Response::view('popular_currencies', ['currencies' => $presented]);
});
