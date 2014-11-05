<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/* --- Accueil --- */
Route::get('/', ['as'=>'home',
                 'uses'=>'PagesController@home']);

/* --- page à propos ---*/
Route::get('/about', ['as'=>'about',
                      'uses'=>'PagesController@about']);

/* --- enregistrer un nouvel utilisateur --- */
Route::get('/register', ['as'=>'register',
                         'uses'=>'UsersController@register']);

Route::post('/store', ['as'=>'store',
                       'uses'=>'UsersController@store']);