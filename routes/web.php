<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('event', function()  {
    \Artisan::call('event:generate');
    dd(\Artisan::output());
});

// Route::get('test', function(Illuminate\Http\Request $request) {
    
//     $request->request->add([
//         'client_id' => '10',
//         'client_secret' => 'TWnihvJ4aIiHXBhlFrxllOmW8wxSLr0DW6eorXB4',
//         'grant_type' => 'password',
//         'username' => 'oguzcan@demircan.com',
//         'password' => 'oguzcan'
//       ]);
//       $tokenRequest = $request->create('/oauth/token', 'POST', $request->all());
//         dd($tokenRequest ,\Route::dispatch($tokenRequest));
// });