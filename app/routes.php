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
/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
*/
Route::get('/authentication/main', function()
{
  return View::make('authentication.main');
});
/*
|--------------------------------------------------------------------------
| Catalog
|--------------------------------------------------------------------------
|
*/
Route::get('/catalog/main', function()
{
  return View::make('catalog.main');
});