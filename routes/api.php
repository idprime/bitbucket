<?php

use App\Models\TbmMeeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\MeetingController;
use App\Http\Controllers\RunnerController;
use App\Models\Meeting;
use App\Models\Runner;

Route::get('meetings' , [MeetingController::class,'index']);
Route::get('meetings', function() {
    return Meeting::all();
});

Route::get('runner' , [RunnerController::class,'index']);
Route::get('runner/{id}/form-data' , [RunnerController::class,'show']);
// Route::get('runners/{id}', function($id) {
//     return Runner::find($id);
// });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


