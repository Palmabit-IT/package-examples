<?php

Route::get('/', function()
{
  return View::make('hello');
});

/*
|--------------------------------------------------------------------------
| Multilanguage
|--------------------------------------------------------------------------
|
*/
Route::get('/multilanguage/main', ['prefix' => L::get(), 'uses' =>function()
{
    return View::make('multilanguage.main');
}]);
