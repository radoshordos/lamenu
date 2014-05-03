<?php

Route::get('/', function () {
    return "MAIN";
});

// Session Routes
Route::get('adm/login',  array('as' => 'login', 'uses' => 'SessionController@create'));
Route::get('adm/logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));
Route::resource('adm/sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));

// User Routes
Route::get('adm/register', 'UserController@create');
Route::get('adm/users/{id}/activate/{code}', 'UserController@activate')->where('id', '[0-9]+');
Route::get('adm/resend', array('as' => 'resendActivationForm', function()
{
	return View::make('users.resend');
}));
Route::post('adm/resend', 'UserController@resend');
Route::get('adm/forgot', array('as' => 'forgotPasswordForm', function()
{
	return View::make('users.forgot');
}));
Route::post('adm/forgot', 'UserController@forgot');
Route::post('adm/users/{id}/change', 'UserController@change');
Route::get('adm/users/{id}/reset/{code}', 'UserController@reset')->where('id', '[0-9]+');
Route::get('adm/users/{id}/suspend', array('as' => 'suspendUserForm', function($id)
{
	return View::make('users.suspend')->with('id', $id);
}));
Route::post('adm/users/{id}/suspend', 'UserController@suspend')->where('id', '[0-9]+');
Route::get('adm/users/{id}/unsuspend', 'UserController@unsuspend')->where('id', '[0-9]+');
Route::get('adm/users/{id}/ban', 'UserController@ban')->where('id', '[0-9]+');
Route::get('adm/users/{id}/unban', 'UserController@unban')->where('id', '[0-9]+');
Route::resource('adm/users', 'UserController');

// Group Routes
Route::resource('adm/groups', 'GroupController');

Route::get('adm/', array('as' => 'home', function()
{
	return View::make('home');
}));


// App::missing(function($exception)
// {
//     App::abort(404, 'Page not found');
//     //return Response::view('errors.missing', array(), 404);
// });


