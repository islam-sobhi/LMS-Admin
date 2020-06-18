<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//classes
  Route::post('/semester/store', 'SemesterController@store')->name('semester.store');
  Route::get('/semester/create', 'SemesterController@create')->name('semester.create');
  Route::get('/semester/index', 'SemesterController@index')->name('semester.index');
  Route::get('/semester/edit/{id}', 'SemesterController@edit')->name('semester.edit');
  Route::get('/semester/delete/{id}', 'SemesterController@destroy')->name('semester.delete');
  Route::post('/semester/update/{id}', 'SemesterController@update')->name('semester.update');



/*
    Teacher 
*/
  Route::post('/teacher/store', 'TeacherController@store')->name('teacher.store');
  Route::get('/teacher/create', 'TeacherController@create')->name('teacher.create');
  Route::get('/teacher/index', 'TeacherController@index')->name('teacher.index');
  Route::get('/teacher/delete/{id}', 'TeacherController@destroy')->name('teacher.delete');
  Route::get('/teacher/edit/{id}', 'TeacherController@edit')->name('teacher.edit');
  Route::post('/teacher/update/{id}', 'TeacherController@update')->name('teacher.update');

/*
    attendance 
*/
  Route::post('/attendance/store', 'AttendController@store')->name('attendance.store');
  Route::get('/attendance/create', 'AttendController@create')->name('attendance.create');
  Route::get('/attendance/index', 'AttendController@index')->name('attendance.index');
  Route::get('/attendance/delete/{id}', 'AttendController@destroy')->name('attendance.delete');
  Route::get('/attendance/edit/{id}', 'AttendController@edit')->name('attendance.edit');
  Route::get('/attendance/update/{id}', 'AttendController@update')->name('attendance.update');



