<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/', function () {
//    return 'Hello, world!';
//});

//Route::get('/', function () {
//    $res = 2 + 3;
//    $name = 'John';
//    return view('home' ,compact('res','name')); //'home',['id'=>$res])-> with('var',$name);
//})->name('home');
//
//Route::get('/about',function (){
//
//    return 'about page';
//}) ;
//
//Route::get('/contact',function (){
//   return view('contact');
//});
////Route::post('/send-email',function (){
////if(!empty($_POST)){
////    dump($_POST);
////}
////    return 'Send Email';
////});
//
//Route::match(['post','get','put'],'/contact1',function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//})->name( 'contact');
//
//Route::view('/test','hello',['test' => 'Test data']);
//
////Route::redirect();
//
//Route::get('/post/{id}/{slug?}', function ($id,$slug)
//{
//
//    if ($id>5)
//    {
//        return "1";
//    }
//    return "Post $id|$slug";
//})->where(['id','[0-9]+','slug'=> '[A-Za-z0-9-\']+'])
//->name('post');
//
//Route::prefix('admin')->name('admin.post')->group(function ()
//{
//    Route::get('/posts', function (){
//    return 'Posts List';
//    });
//
//    Route::get('/posts/create', function (){
//        return 'Posts Create';
//    });
//
//    Route::get('/posts/{id}/edit', function ($id){
//        return "EDItPosts List $id";
//    })->name('post');
//
//});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/create',[homeController::class,'create'])->name('posts.create');
Route::post('/',[HomeController::class,'store'])->name('posts.store');
//Route::get('/test',[HomeController::class, 'test']);
Route::get('/page/about',[PageController::class, 'show'])->name('page.about');
//Route::get('/test2', [TestController::class, 'index']);
//
//Route::resource('/posts',PostController::class,['parametres'=>['posts'
// =>'id']]);
//
//Route::fallback(function ()
//{
//    return redirect() ->route('home');
//}
//);
