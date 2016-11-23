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

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::get('/home', function () {
    return redirect()->to('/admin');
});

Route::get('/', 'WelcomeController@index');
Route::get('about', 'WelcomeController@about');
Route::get('contact', 'WelcomeController@contact');
Route::post('contact', 'WelcomeController@postContact');

Route::controller('user', 'AuthorController');
Route::controller('users', 'AuthorController');
Route::controller('authors', 'AuthorController');

Route::controller('admin', 'AdminController');
// Route::controller('blog', 'BlogController');
Route::controller('gallery', 'GalleryController');
Route::controller('event', 'EventController');
Route::controller('press', 'PressController');
Route::controller('blog', 'StoryController');
