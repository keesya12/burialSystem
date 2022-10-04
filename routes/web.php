<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RecordsController;


use function Ramsey\Uuid\v1;

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
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])-> group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    Route::get('/records',[App\Http\Controllers\Admin\RecordsController::class,'index'])->name('records');
    Route::get('/users',[App\Http\Controllers\Admin\UserController::class,'index'])->name('users');
    Route::get('/create',[App\Http\Controllers\Admin\RecordsController::class,'create'])->name('create');
    Route::post('/save',[App\Http\Controllers\Admin\RecordsController::class,'store'])->name('save');
    Route::get('/show',[App\Http\Controllers\Admin\RecordsController::class,'show'])->name('show');
    Route::get('/export-records',[App\Http\Controllers\Admin\RecordsController::class,'exportRecords'])->name('export');
    // Route::get('/delete/{RefNum}', [App\Http\Controllers\Admin\RecordsController::class, 'destroy'])->name('delete');
    Route::get('/edit',[App\Http\Controllers\Admin\RecordsController::class,'edit'])->name('edit');
    Route::put('/update',[App\Http\Controllers\Admin\RecordsController::class,'update'])->name('update');
});
Route::resource('records','RecordsController');

