<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/portfolio/connection/createread', 
    [PostController::class, 'index'])->name('connection/createread');
    Route::get('/portfolio/connection/mypage/{id}', [PostController::class, 'mypage'])
    ->name('connection/mypage');
    Route::get('/portfolio/connection/userlist', 
    [PostController::class, 'userlist'])->name('connection/userlist');
});

require __DIR__.'/auth.php';


Route::get('/index', [IndexController::class, 'index']);

Route::get('/portfolio/connection', [ConnectionController::class, 'connection_welcome'])->name('connection/welcome');





Route::post('/store', [PostController::class, 'store'])->name('post.store');
Route::post('/update', [PostController::class, 'update'])->name('post.update');