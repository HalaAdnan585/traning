<?php


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
Route::get('/index', function () {

    // return view('index');
    return "addTeacherForm";

})->name('index');

Route::get('/first', "App\HTTP\Controllers\Controller@insertNewTeacher");

Route::get('/second', "App\HTTP\Controllers\Controller@insertNewStudent");
Route::get('/getstudent', "App\HTTP\Controllers\Controller@getStudent");
Route::get('/ViewList', "App\HTTP\Controllers\Controller@ShowStudentList");
Route::post('/first', "App\HTTP\Controllers\Controller@insertTeacherPost");
Route::get('/register','App\HTTP\Controllers\registerationController@showRegisterPage');
Route::post('/register','App\HTTP\Controllers\registerationController@store');
Route::get('/login','App\HTTP\Controllers\sessionController@showLoginPage');
Route::get('/dashboard',"App\HTTP\Controllers\Controller@showDashboardBage");