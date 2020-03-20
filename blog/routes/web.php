<?php

use Illuminate\Support\Facades\Route;


Route::get('/','SiteController@showHome');
Route::get('/about','SiteController@showAbout');
Route::get('/service','SiteController@showService');
Route::get('/portfolio','SiteController@showPortfolio');
