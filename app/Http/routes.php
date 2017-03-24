<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*funciona*/
Route::get('/foo', function () {
    $salida = shell_exec('git pull origin master');
echo "<pre>$salida</pre>";
     $exitCode = Artisan::call('migrate:refresh', [
    '--force' => true,
]);
    $exitCode = Artisan::call('config:cache');
    
});

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('doctor/login','DoctorController@showLoginForm');

Route::post('doctor/login','DoctorController@login');
Route::get('doctor/area','DoctorController@secret');

Route::get('paciente/login','PacienteController@showLoginForm');

Route::post('paciente/login','PacienteController@login');
Route::get('paciente/area','PacienteController@secret');