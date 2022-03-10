<?php

use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UpcomingResource;

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



//// GET UPCOMING TASK ////////////////////
Route::get('/upcoming', function(){
    $upcoming = Upcoming::all();

    return UpcomingResource::collection($upcoming);

    // return $upcoming;
});


///////// ADD NEW TASK /////////////////////
Route::post('upcoming', function(Request $request){

    return Upcoming::create([
        'title'=> $request->title,
        'task_id'=> $request->task_id,
        'waiting'=> $request->waiting,
    ]);

});
///////// DELETE UPCOMING TASK /////////////////////
Route::delete('upcoming/{task_id}', function( $task_id){

    \DB::table('upcomings')->where('id',$id)->delete();

    return 204;

});