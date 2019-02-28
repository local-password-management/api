<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->group(function () {
   
    Route::get('me', 'User\UserController@me');

    Route::apiResource('projects','Project\ProjectController');
    
    Route::apiResource('field-groups','Field\FieldGroupController');

    Route::apiResource('fields', 'Field\FieldController');

});

Route::get('test', function() {
    return response()->json([
        'status' => 'OK',
    ]);
});