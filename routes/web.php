<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DongXeController;
use App\Http\Controllers\TinXeController;
use App\Http\Controllers\XeController;
use App\Http\Controllers\MauXeController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\SliderController;

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

Route::get('/', [IndexController::class, 'getIndex']);

Route::get('/tin', [IndexController::class, 'getTin']);
Route::get('/tinchitiet', [IndexController::class, 'getChiTietTin']);
Route::get('/xe', [IndexController::class, 'getXe']);

Route::get('/admin', function() {
    if (Auth::check())
        return view('server.mainpanel');
    return view('login');
})->name('login_panel');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', function(){
    Auth::logout();
    return view('login');
});

Route::prefix('management')->middleware(['m_login'])->group(function(){
    Route::view('/mainpanel', 'server.mainpanel');
    Route::prefix('account')->group(function(){
        Route::name('quanlytaikhoan.')->group(function(){
            Route::get('/',[UserController::class, 'index'])->name('panel');
            Route::get('/getdata',[UserController::class, 'loadData']);
            Route::post('/post',[UserController::class, 'postData'])->name('post');
            Route::post('/delete',[UserController::class, 'delete'])->name('delete');
            Route::get('/getedit',[UserController::class, 'getEdit'])->name('getedit');
            Route::post('/postedit',[UserController::class, 'postEdit'])->name('postedit');
        });        
    });
    Route::prefix('dongxe')->group(function(){
        Route::name('quanlydongxe.')->group(function(){
            Route::get('/',[DongXeController::class, 'index'])->name('panel');
            Route::get('/getdata',[DongXeController::class, 'loadData']);
            Route::post('/post',[DongXeController::class, 'postData'])->name('post');
            Route::post('/delete',[DongXeController::class, 'delete'])->name('delete');
            Route::get('/getedit',[DongXeController::class, 'getEdit'])->name('getedit');
            Route::post('/postedit',[DongXeController::class, 'postEdit'])->name('postedit');
        });        
    });
    Route::prefix('tinxe')->group(function(){
        Route::name('tinxe.')->group(function(){
            Route::get('/',[TinXeController::class, 'index'])->name('panel');
            Route::get('/getdata',[TinXeController::class, 'loadData']);
            Route::get('/gettinxe',[TinXeController::class, 'getTinXe']);
            Route::get('/themmoi',[TinXeController::class, 'themMoi'])->name('post.themmoi');
            Route::post('/themmoi/post',[TinXeController::class, 'postData'])->name('post');
            Route::post('/delete',[TinXeController::class, 'delete'])->name('delete');
            Route::get('/getedit/{idtinxe}',[TinXeController::class, 'getEdit'])->name('getedit');
            Route::post('/getedit/{idtinxe}/postedit',[TinXeController::class, 'postEdit'])->name('postedit');
        });        
    });
    Route::prefix('xe')->group(function(){
        Route::name('xe.')->group(function(){
            Route::get('/',[XeController::class, 'index'])->name('panel');
            Route::get('/getdata',[XeController::class, 'loadData']);
            Route::get('/gettinxe',[XeController::class, 'getTinXe']);
            Route::get('/themmoi',[XeController::class, 'themMoi'])->name('post.themmoi');
            Route::post('/themmoi/post',[XeController::class, 'postData'])->name('post');
            Route::post('/delete',[XeController::class, 'delete'])->name('delete');
            Route::get('/getedit/{idxe}',[XeController::class, 'getEdit'])->name('getedit');
            Route::post('/getedit/{idxe}/postedit',[XeController::class, 'postEdit'])->name('postedit');
            Route::post('/postmauxe',[MauXeController::class, 'postMauXe']);
            Route::get('/getmauxe',[MauXeController::class, 'getMauXe']);
            Route::post('/deletemauxe',[MauXeController::class, 'deleteMauXe']);
        });        
    });
    Route::prefix('tintuc')->group(function(){
        Route::name('tintuc.')->group(function(){
            Route::get('/',[TinTucController::class, 'index'])->name('panel');
            Route::get('/getdata',[TinTucController::class, 'loadData']);
            Route::get('/gettintuc',[TinTucController::class, 'getTinTuc']);
            Route::get('/themmoi',[TinTucController::class, 'themMoi'])->name('post.themmoi');
            Route::post('/themmoi/post',[TinTucController::class, 'postData'])->name('post');
            Route::post('/delete',[TinTucController::class, 'delete'])->name('delete');
            Route::get('/getedit/{idtintuc}',[TinTucController::class, 'getEdit'])->name('getedit');
            Route::post('/getedit/{idtintuc}/postedit',[TinTucController::class, 'postEdit'])->name('postedit');
        });        
    });
    Route::prefix('slider')->group(function(){
        Route::name('slider.')->group(function(){
            Route::get('/',[SliderController::class, 'index'])->name('panel');
            Route::get('/getdata',[SliderController::class, 'loadData']);
            Route::get('/gettin',[SliderController::class, 'getTin']);
            Route::post('/post',[SliderController::class, 'postData'])->name('post');
            Route::post('/delete',[SliderController::class, 'delete'])->name('delete');
            Route::get('/getedit',[SliderController::class, 'getEdit'])->name('getedit');
            Route::post('/postedit',[SliderController::class, 'postEdit'])->name('postedit');
        });        
    });
});
