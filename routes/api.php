<?php

use Illuminate\Http\Request;
use App\Services\{CurrencyRepositoryInterface,CurrencyPresenter};
use App\Services\{GetCurrenciesCommandHandler,GetMostChangedCurrencyCommandHandler};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/currencies', function () {
    $repository =  App::make(CurrencyRepositoryInterface::class);
    $command = new GetCurrenciesCommandHandler($repository);
    $currencies = $command->handle();
    foreach ($currencies as $currency) { 
        $presented[] = CurrencyPresenter::present($currency); 
    }   
    return Response(json_encode($presented),200)->header('Content-Type', 'application/json');;
});

Route::get('/currencies/unstable', function () {
    $repository =  App::make(CurrencyRepositoryInterface::class);
    $command = new GetMostChangedCurrencyCommandHandler($repository);
    $currency = $command->handle();
    $presented = CurrencyPresenter::present($currency);
    return Response(json_encode($presented),200)->header('Content-Type', 'application/json');;
});
