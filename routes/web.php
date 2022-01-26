<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'admin']], function(){
            Route::get('/dashboard', function (){
                return view('admin.dashboard');
            });

            Route::get('/role-register', 'App\Http\Controllers\Admin\DashboardController@registered')->name('role-register');
            Route::get('/role-edit/{id}', 'App\Http\Controllers\Admin\DashboardController@registeredit')->name('role-edit/{id}');
            Route::put('/role-register-update/{id}', 'App\Http\Controllers\Admin\DashboardController@registerupdate')->name('role-update/{id}');
            Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete')->name('role-delete/{id}');


});
Route::get('/projects', 'App\Http\Controllers\Admin\ProjectController@index')->name('projects');
Route::post('/save-projects','App\Http\Controllers\Admin\ProjectController@store')->name('save-projects');
Route::get('/projects-edit/{id}', 'App\Http\Controllers\Admin\ProjectController@edit')->name('projects-edit/{id}');
Route::put('/projects-update/{id}', 'App\Http\Controllers\Admin\ProjectController@update')->name('projects-update/{id}');
Route::delete('projects-delete/{id}', 'App\Http\Controllers\Admin\ProjectController@delete')->name('projects-delete/{id}');
