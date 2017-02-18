<?php  

Route::get('/', function () { 

});

Auth::routes();
Route::get('/home', 'HomeController@index');
 
// pages
Route::get('admin/dashboard', 'PagesController@Dashboard')->name('pages.dashboard'); 
Route::get('admin/sms', 'PagesController@Sms')->name('pages.sms'); 
Route::get('admin/attendance', 'PagesController@Attendance')->name("pages.attendance"); 
Route::get('admin/attendance/event/{id?}', 'PagesController@AttendanceEvent')->name("pages.attendance.event");
Route::get('student/profile', 'PagesController@studentProfile')->middleware('authStudent')->name("student.profile"); 
 
Route::post('student/PostLogin', 'StudentController@PostLogin')->name("student.post.login");
Route::get('student/logout', 'StudentController@LogOut')->name("student.logout");





// student login

// Route::post('student/postLogin', 'StudentController@PostLogin')->name('student.post.login');


Route::get('student/search/{id}', 'StudentController@searchDetail')->name('student.search.detail');


// default and resources routes
Route::resource('user', 'UserController');
Route::resource('attendance', 'AttendanceController');
Route::resource('event', 'EventController');
Route::resource('worker', 'EventController');
Route::resource('personnel', 'PersonnelController');
Route::resource('student', 'StudentController');
Route::resource('sms', 'SmsController');
// Route::resource('student/event', 'StudentEventController'); 
Route::post('student/event', 'StudentEventController@store')->name('student.event.store');

