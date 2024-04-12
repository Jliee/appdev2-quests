<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#activity 2

#1/creating middleware for bearer token app/Http/Middleware/ExtractBearerToken.php

Route::middleware('bearer.auth')->group(function(){

   #5/checking middleware interception with postman
    Route::get('/get', function(){
        return 'your token is valid! get mthod works';
    });

    Route::post('/post', function(Request $request){
        return  response()->json($request);
    });

    // Route::post('/post', [PostController::class, 'store']);
    
    Route::put('/post/{id}', function(Request $request){
        return  response()->json($request);
    });

    Route::patch('/get/{id}', function(Request $request){
        return  response()->json($request);
    });

    Route::delete('/post/{id}', function(String $id){
        return  response()->json([
            "message" => $id . " was deleted successfully"
        ]);
    });

});