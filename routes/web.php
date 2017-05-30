<?php

Route::get("/", "WelcomeController@index");

Auth::routes();

//Route::prefix('admin')->group(function(){
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm');
//    Route::post('/login', 'Auth\AdminLoginController@login');
//    Route::get('/', 'Auth\AdminController@index');
//});

Route::get('/admin-login', 'Auth\AdminLoginController@showAdminLoginForm');
Route::post('/admin-login', 'Auth\AdminLoginController@adminLogin');

Route::get('/admin-register', 'Auth\AdminRegisterController@showAdminRegistrationForm');
Route::post('/admin-register', 'Auth\AdminRegisterController@adminRegister');

Route::get('/dashboard', 'AdminController@index');
Route::post('/admin-logout', 'Auth\AdminLogoutController@adminLogout');

Route::get('/home', 'HomeController@index');
Route::post('/user-logout', 'Auth\LogoutController@userLogout');

Route::get('/participate-quiz/{id}', 'QuizController@showQuiz');
Route::post('/submit-quiz', 'QuizController@submitQuiz');
Route::get('/confirm-submit/{quizId}', 'QuizController@confirmSubmit');
Route::get('/show-result/{quizId}', 'QuizController@showResult');

Route::get('/add-subject', 'SubjectController@addSubject');
Route::post('/save-subject', 'SubjectController@saveSubject');
Route::get('/view-subject', 'SubjectController@viewSubject');
Route::get('/edit-subject/{id}', 'SubjectController@editSubject');
Route::post('/update-subject', 'SubjectController@updateSubject');
Route::get('/delete-subject/{id}', 'SubjectController@deleteSubject');

Route::get('/create-exam', 'ExamController@createExam');
Route::post('/save-exam', 'ExamController@saveExam');
Route::get('/view-exam', 'ExamController@viewExam');
Route::get('/exam-details/{id}', 'ExamController@examDetails');
Route::get('/edit-exam/{id}', 'ExamController@editExam');
Route::post('/update-exam', 'ExamController@updateExam');
Route::get('/unpublish-exam/{id}', 'ExamController@unpublishExam');
Route::get('/publish-exam/{id}', 'ExamController@publishExam');
Route::get('/delete-exam/{id}', 'ExamController@deleteExam');

Route::get('/add-question/{id}', 'QuestionController@addQuestion');
Route::post('/save-question', 'QuestionController@saveQuestion');
Route::get('/view-question/{id}', 'QuestionController@viewQuestion');
Route::get('/edit-question/{id}', 'QuestionController@editQuestion');
Route::post('/update-question', 'QuestionController@updateQuestion');
Route::get('/delete-question/{id}', 'QuestionController@deleteQuestion');
