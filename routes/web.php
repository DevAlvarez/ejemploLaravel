<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\TestController;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Lo hecho en la primera parte del curso antes de tailwind



Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {

    // Route::get('/', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class
    ]);

});

// Route::resource('post', PostController::class);

// Route::resource('category', CategoryController::class);

// Route::get('post', [PostController::class, 'index']);
// Route::get('post/{post}', [PostController::class, 'show']);
// Route::get('post/create', [PostController::class, 'create']);
// Route::get('post/{post}/edit', [PostController::class, 'edit']);

// Route::post('post', [PostController::class, 'store']);
// Route::put('post/{post}', [PostController::class, 'update']);
// Route::delete('post/{post}', [PostController::class, 'destroy']);

// Route::get('/', [TestController::class, 'index'] )->name('index');

// Route::get('/custom', function () {
//     $mensaje = 'y voló.. y yo volé de el';
//     return view('custom', ['blablabla'=> $mensaje]);
// })->name('custom');

// Route::get('/contacto', function () {
    
//     return view('contacto');
    
// })->name('contacto');

// Route::get('/test', [TestController::class, 'test'])->name('test');

// Route::get('/master', function () {
   
//     return view('layout/master');

// })->name('master');
