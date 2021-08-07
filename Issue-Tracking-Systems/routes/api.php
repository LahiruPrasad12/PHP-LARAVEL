<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//import posts
use App\Models\Post;
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




/*-------------------------------------------Routes For Crud API-------------------------------------------*/


//create this route for fetch all posts
Route::get('/posts',function (Request $request){
    return Post :: all();
});




//create this route for add new posts (Me sadaha Post.php eke venas kirimata yamak ata)
Route::post('/posts',function (){

    //validation part
    request()->validate([
       'Title' => 'required',
        'Content' => 'required'
    ]);


    return Post::create([
        'Title' => request('Title'),
        'Content' => request('Content')
    ]);
});




//create this route for update data
Route::put('/posts/{post}', function (Post $post){
    $success = $post->update([
        'Title' => request('Title'),
        'Content' => request('Content')
    ]);

    if($success){
        return [
            'Success' => $success
        ];
    }else{
        return [
            'Success' => $success
        ];
    }

});
