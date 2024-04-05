<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/level',[LevelController::class,'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

//TUGAS NO 3:
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/edited/{id}', [KategoriController::class, 'edited']);


Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);

Route::get('/user/create', function () {
    return view('m_user.create');
});

Route::get('/level/create', function () {
    return view('level.create');
});

Route::resource('m_user', POSController::class);

// =====================================================================================
//                            BATAS SUCI

// JOBSHEET 7

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']);          //menampilkan halaman awal user
    Route::post('/list', [UserController::class,'list']);       //menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class,'create']);    //menampilkan halaman form tambah user
    Route::post('/', [UserController::class,'store']);          //menyimpan data user baru  
    Route::get('/{id}', [UserController::class,'show']);        //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class,'edit']);   //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class,'update']);      //menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class,'destroy']);  //menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);
    Route::get('/create', [LevelController::class, 'create']);
    Route::post('/', [LevelController::class, 'store']);
    Route::get('/{id}', [LevelController::class, 'show']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);
    Route::delete('/{id}', [LevelController::class, 'destroy']);
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});