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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/uptime','Api\Dashboard@uptimeComponent');
Route::get('/cpu_usage','Api\Dashboard@cpuLoadComponent');
Route::get('/disk_usage',function(){
  return response()->json(array("message"=>"Disabled"));
});
// Route::middleware('auth:api')->get('/uptime','Api\Dashboard@uptimeComponent');
// Route::middleware('auth:api')->get('/cpu_usage','Api\Dashboard@cpuLoadComponent');
// Route::middleware('auth:api')->get('/disk_usage','Api\Dashboard@diskUsageComponent');
// Route::middleware('auth:api')->get('/disk_usage',function(){
//   return response()->json(array("message"=>"Disabled"));
// });
