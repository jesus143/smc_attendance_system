<?php 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
 
// pages
Route::get('admin/dashboard', 'PagesController@Dashboard')->name('pages.dashboard'); 
Route::get('admin/sms', 'PagesController@Sms')->name('pages.sms'); 
Route::get('admin/attendance', 'PagesController@Attendance')->name("pages.attendance"); 
Route::get('admin/attendance/event/{id?}', 'PagesController@AttendanceEvent')->name("pages.attendance.event"); 
 
// default and resources routes
Route::resource('user', 'UserController');
Route::resource('attendance', 'AttendanceController');
Route::resource('event', 'EventController');
Route::resource('worker', 'EventController');
  