<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Livewire\MapLocation;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']); 
Route::get('/post/detail/{id}',[ArticleController::class,'show'])->name('post.detail');
Route::get('/peta-pergaulan-bebas', MapLocation::class)->name('post.map');
Route::get('/pergaulan-bebas',[HomeController::class,'pergaulan'])->name('post.kategori');
Route::get('/pelecehan-sexual',[HomeController::class,'sexual'])->name('post.sexual');
Route::get('/tips-pencegahan',[HomeController::class,'pencegahan'])->name('post.pencegahan');
Route::post('/post/detail/{id}',[ArticleController::class,'insertData'])->name('insertData');

Route::get('/print-pdf',[HomeController::class,'printpdf'])->name('download.pdf');
Route::get('/print-excel',[HomeController::class,'printexcel'])->name('download.excel');

Route::get('/pdf-lokasi',[HomeController::class,'print_lokasi'])->name('lokasi.pdf');
Route::get('/excel-lokasi',[HomeController::class,'excel_lokasi'])->name('lokasi.excel');

Route::get('/excel-user',[HomeController::class,'excel_user'])->name('user.excel');
Route::get('/pdf-user',[HomeController::class,'print_user'])->name('user.pdf');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
