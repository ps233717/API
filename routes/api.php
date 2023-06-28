<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningenController;
use App\Http\Controllers\AuthenticationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'],
function()
{
    route::apiResource('customers', CustomerController::class);
    route::apiResource('invoices', InvoiceController::class);
});

Route::apiResource('oefeningen', OefeningenController::class);


Route::post('/register', [AuthenticationController::class, 'register']);

Route::post('/login', [AuthenticationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

// PROTECTED ROUTES

Route::get('profile', function(Request $request) { return auth()->user();});

Route::post('/logout', [AuthenticationController::class, 'logout']);

});

Route::fallback(function(){

return response()->json([

'message' => 'Page Not Found'], 404);

});