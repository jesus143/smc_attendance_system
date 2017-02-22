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
Route::get('attendance/print/student/{id?}', 'AttendanceController@printStudent')->name('attendance.print.student');


Route::get('personnel/profile', 'PagesController@personnelProfile')->middleware('authPersonnel')->name("personnel.profile");
Route::post('personnel/PostLogin', 'PersonnelController@PostLogin')->name("personnel.post.login");
Route::get('personnel/logout', 'PersonnelController@LogOut')->name("personnel.logout");
Route::get('attendance/print/personnel/{id?}', 'AttendanceController@printPersonnel')->name('attendance.print.personnel');


// student login

// Route::post('student/postLogin', 'StudentController@PostLogin')->name('student.post.login');


Route::get('personnel/search/{id}', 'PersonnelController@searchDetail')->name('personnel.search.detail');
Route::get('student/search/{id}', 'StudentController@searchDetail')->name('student.search.detail');


Route::post('personnel/event', 'PersonnelEventController@store')->name('personnel.event.store');














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




///////////////////

Route::get('attendance/{event_id?}/{type?}', 'AttendanceController@attendancePersonnel')->name('attendance.show');

Route::get('personnel/print/{id?}', 'AttendanceController@printSpecificPersonnelAttendance')->name('attendance.personnel.specific.print');
Route::get('event-create/{type?}', 'EventController@index')->name('event.index');
Route::get('event-create-select', 'EventController@createOption')->name('event.create.select');
Route::get('event/update/{id?}/{type?}', 'EventController@show')->name('event.show');
